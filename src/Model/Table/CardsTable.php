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
            ->notEmpty('name'); //campo nao pode estar vazio

        $validator
            ->notEmpty('description'); //campo nao pode estar vazio

        $validator
            ->integer('atk') //campo tem que ser um numero inteiro
            ->notEmpty('atk'); //campo nao pode estar vazio

        $validator
            ->integer('def') //campo tem que ser um numero inteiro
            ->notEmpty('def'); //campo nao pode estar vazio

        return $validator;
    }
}
