<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CharactersTable extends Table
{

    public function initialize(array $config)
    {
        $this->displayField('name');

        $this->belongsToMany('Cards', [
            'foreignKey' => 'character_id',
            'targetForeignKey' => 'card_id',
            'joinTable' => 'characters_cards'
        ]);
        $this->belongsToMany('Users', [
            'foreignKey' => 'character_id',
            'targetForeignKey' => 'user_id',
            'joinTable' => 'users_characters'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('name');

        $validator
            ->allowEmpty('gender');

        return $validator;
    }
}
