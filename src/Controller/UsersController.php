<?php
    namespace App\Controller;

    use App\Controller\AppController;
    use Cake\Event\Event;
    use Cake\I18n\I18n;

    class UsersController extends AppController
    {
        public $paginate = [
            'limit' => 3 //limita o numero de registos a mostrar na pagina
        ];

        public function initialize()
        {
            parent::initialize();
            $this->loadComponent('Paginator'); //carrega o componente de paginaçao
            $this->loadComponent('RequestHandler'); //carrega o componente de pedidos REST
        }

        public function beforeFilter(Event $event)
        {
            parent::beforeFilter($event);
            $this->Auth->allow(['register','home','edit','view','index']); //permite a aacao register sem estar logado
        }



        public function login()
        {
            if ($this->request->is('post')) {     //verifica se o pedido é POST
                $user = $this->Auth->identify(); //identifica o utilizador
                if ($user) {                    //verifica se os dados do utilizador correspondem a algum user na base de dados
                    $this->Auth->setUser($user); //define o utiilizador como logado
                    return $this->redirect($this->Auth->redirectUrl()); //redireciona o utilizador para outra pagina
                }
                $this->Flash->error('Usuário ou senha ínvalido, tente novamente'); //mostra uma mensagem de erro
            }
        }

        public function logout()
        {
            $this->Auth->logout(); //termina a sessao do utilizador
            return $this->redirect(['controller'=>'users', 'action'=>'login']); //redireciona para a pagina de login
        }

         public function index()
         {
            $this->redirect(['controller'=>'users', 'action'=>'home']); //redireciona para a pagina principal
        }


        public function register()
        {
            $user = $this->Users->newEntity(); //cria uma nova entidade vazia com os dados necessarios para utilizadores
            if ($this->request->is('post')) { //verifica se o pedido foi de POST

                //preenche os dados de utilizador validando ao mesmo tempo
                $user = $this->Users->patchEntity($user, $this->request->data(), ['validate' => 'User']);
                if ($this->Users->save($user)) { //tenta guardar o utilizador na base de dados
                    $this->redirect(['action' => 'login']); //redireciona para a pagina de login
                    return $this->Flash->success('O usuário foi salvo.'); //envia uma mensagem de sucesso
                }
                $this->Flash->error('Não é possível adicionar o usuário.'); //mostra uma mensagem de erro
            }
            $cards = $this->Users->Cards->find('list');
            $this->set('cards', $cards);
            $this->set('user', $user);
        }

        public function edit($id){
            $user = $this->Users->get($id, [
                'contain' => ['Cards']
            ]);
            if ($this->request->is('put')) { //verifica se o pedido foi de put

                //preenche os dados de utilizador validando ao mesmo tempo
                $user = $this->Users->patchEntity($user, $this->request->data(), ['validate' => 'User']);
                if ($this->Users->save($user)) { //tenta guardar o utilizador na base de dados
                    $this->redirect(['action' => 'home']); //redireciona para a pagina home
                    return $this->Flash->success('Alteraçoes com sucesso.'); //envia uma mensagem de sucesso
                }
                $this->Flash->error('Não é possível adicionar o usuário.'); //mostra uma mensagem de erro
            }
            $cards = $this->Users->Cards->find('list');
            $this->set('cards', $cards);
            $this->set('user', $user);
        }

        public function home()
        {
            $query = $this->Users->find('all'); //encontra todos os registos da tabela users

            $this->set('users', $this->paginate($query)); //envia os registos para a pagina paginados

            if($this->request->is('post')){ //espera por um pedido tipo POST
                $locale = $this->request->data('locale'); //recebe o valor da linguagem inserida
                I18n::locale($locale); //define a linguagem da pagina
            }
        }

        public function view($id)
        {
            $user = $this->Users->get($id, [
           'contain' => ['Cards']
            ]);

            $this->set('user', $user);
            $this->set('id',$id);
        }

    }
?>
