<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CharactersTable extends Table
{

    public function initialize(array $config)
    {
        //mostra o campo name ao aceder a tabela
        $this->displayField('name');

        //define a ligacao a tabela users
        $this->hasOne('Users'));

        //define a ligacao a tabela cards
        $this->belongsToMany('Cards');
    }

    //efetuar validacoes ao enviar dados para a tabela
    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('name'); //campo nao pode estar vazio

        return $validator;
    }
}
