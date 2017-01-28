<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class UsersTable extends Table
{

    public function initialize(array $config)
    {
        //mostra o campo username ao aceder a tabela
        $this->displayField('username');

        //define a ligacao a tabela characters
        $this->hasOne('Characters'));
    }

    //efetuar validacoes ao enviar dados para a tabela
    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('username'); //campo nao pode estar vazio

        $validator
            ->notEmpty('password'); //campo nao pode estar vazio

        return $validator;
    }

}
