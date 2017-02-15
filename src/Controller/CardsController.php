<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Utility\Text;
use Cake\I18n\I18n;


class CardsController extends AppController
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
        $this->Auth->allow(['index','add','delete','edit']); //permite a aacao register sem estar logado
    }

    public function index(){
        $query = $this->Cards->find('all'); //encontra todos os registos da tabela cards

        $this->set('cards', $this->paginate($query)); //envia os registos para a pagina paginados

        if($this->request->is('post')){ //espera por um pedido tipo POST
            $locale = $this->request->data('locale'); //recebe o valor da linguagem inserida
            I18n::locale($locale); //define a linguagem da pagina
        }
    }

    //adicionar registos
    public function add(){
      $card = $this->Cards->newEntity(); //cria uma entidade vazia

      if($this->request->is('post')){ //espera por um pedido POST

        $image = $this->request->data('image'); //recebe o valor do campo de upload (image)
        $extension = pathinfo($image['name'], PATHINFO_EXTENSION); //obtem a extensao do ficheiro
        $image['name'] = Text::uuid($image['name']).'.'.$extension; //transforma o nome em uma string
        //die(debug($image['name']));
        move_uploaded_file($image['tmp_name'], WWW_ROOT . 'img/cards/' . $image['name']);
        //if(move_uploaded_file($image['tmp_name'], WWW_ROOT . 'img/cards/' . $image['name'])){ //Verifica se o ficheiro foi movido com sucesso para outra pasta
        //die(debug($card));

            $card = $this->Cards->patchEntity($card, $this->request->data(), ['validate' => 'Card']); //preenche a entidade com os valores enviados

            $card->image = 'cards/' . $image['name']; //guarda o nome e caminho do ficheiro na patch entity

            if($this->Cards->save($card)){ //valida os dados
                $this->redirect(['controller'=>'cards', 'action'=>'index']); //redireciona para a acao index
            }
            else{
                $this->Flash->error('Nao foi possivel guardar a carta'); //envia uma mensagem de erro
            }
        //}
      }
      $this->set('card',$card); //define a variavel product dentro do template
    }

    //editar registos
    public function edit($id){
        $card = $this->Cards->get($id); //recebe o id que esta no url
        if($this->request->is('put')){ //espera por um pedido PUT
            $card = $this->Cards->patchEntity($card,$this->request->data(), ['validate' => 'Card']); //preenche a entidade com os valores enviados
            if($this->Cards->save($card)){ //valida os dados
                $this->redirect(['controller'=>'cards', 'action'=>'index']); //redireciona para a acao index
            }
            else{
                $this->Flash->error('Nao foi possivel guardar a carta'); //envia uma mensagem de erro
            }
        }
        $this->set('card',$card);
    }

    //apagar registos
    public function delete($id){
        $card = $this->Cards->get($id); //recebe o id que esta no url
        $result = $this->Cards->delete($card); //apaga o registo
        $this->redirect(['action'=>'index']); //redireciona para a acao index
    }
}
