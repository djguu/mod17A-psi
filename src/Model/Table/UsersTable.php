<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class UsersTable extends Table
{

    public function initialize(array $config)
    {
        $this->displayField('name');

        $this->hasOne('Characters'));
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('username');

        $validator
            ->notEmpty('password');

        return $validator;
    }

}
