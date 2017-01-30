<?php

namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class CardsController extends AppController
{

    public function index(){
        $query = $this->Cards->find('all'); //encontra todos os registos da tabela cards

        $this->set('cards',$query); //define a variavel para enviar os registos
    }

    //adicionar registos
    public function add(){
      $card = $this->Cards->newEntity(); //cria uma entidade vazia

      if($this->request->is('post')){ //espera por um pedido POST
        $card = $this->Cards->patchEntity($card, $this->request->data(), ['validate' => 'Card']); //preenche a entidade com os valores enviados
        if($this->Cards->save($card)){ //valida os dados
            $this->redirect(['controller'=>'cards', 'action'=>'index']); //redireciona para a acao index
        }
        else{
            $this->Flash->error('Nao foi possivel guardar a carta'); //envia uma mensagem de erro
        }
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
        $this->redirect(['controller'=>'products', 'action'=>'index']); //redireciona para a acao index
    }
}
