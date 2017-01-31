<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class CardsTable extends Table
{

    public function initialize(array $config)
    {
        //mostra o campo name ao aceder a tabela
        $this->displayField('name');

        //define a ligacao a tabela characters
        $this->belongsToMany('Users');
    }

    //efetuar validacoes ao enviar dados para a tabela
    public function validationCard(Validator $validator)
    {

        $validator
            ->notEmpty('name','Insira um nome'); //campo nao pode estar vazio

        $validator
            ->notEmpty('description','insira uma descricao'); //campo nao pode estar vazio

        $validator
            ->integer('atk') //campo tem que ser um numero inteiro
            ->notEmpty('atk','insira um valor') //campo nao pode estar vazio
            ->add('atk', 'myRule',[
                    'rule' =>  function ($data, $provider) {
                                    if ($data < 0) {
                                        return false;
                                    }
                                    return true;
                                },
                    'message' => 'Insira no minimo 0'
                ]);

        $validator
            ->integer('def') //campo tem que ser um numero inteiro
            ->notEmpty('def','insira um valor') //campo nao pode estar vazio
            ->add('def', 'myRule',[
                    'rule' =>  function ($data, $provider) {
                                    if ($data < 0) {
                                        return false;
                                    }
                                    return true;
                                },
                    'message' => 'Insira no minimo 0'
                ]);

        return $validator;
    }
}
