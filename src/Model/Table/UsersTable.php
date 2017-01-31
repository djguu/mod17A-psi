<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\RulesChecker;


class UsersTable extends Table
{

    public function initialize(array $config)
    {
        //mostra o campo username ao aceder a tabela
        $this->displayField('username');

        //define a ligacao a tabela characters
        $this->belongsToMany('Cards');
    }

    //efetuar validacoes ao enviar dados para a tabela
    public function validationUser(Validator $validator)
    {
        $validator
            ->notEmpty('username'); //campo nao pode estar vazio

        $validator
            ->notEmpty('password'); //campo nao pode estar vazio

        return $validator;
    }

    //impede que aja users iguais
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }

}
