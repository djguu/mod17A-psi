<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function initialize(array $config)
    {
        $this->belongsToMany('Characters', [
            'foreignKey' => 'user_id',
            'targetForeignKey' => 'character_id',
            'joinTable' => 'users_characters'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('username');

        $validator
            ->notEmpty('password');

        return $validator;
    }


    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['username']));

        return $rules;
    }
}
