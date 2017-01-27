<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class CardsTable extends Table
{

    public function initialize(array $config)
    {
        $this->displayField('name');
        
        $this->belongsToMany('Characters', [
            'foreignKey' => 'card_id',
            'targetForeignKey' => 'character_id',
            'joinTable' => 'characters_cards'
        ]);
    }

    public function validationDefault(Validator $validator)
    {
        $validator
            ->notEmpty('name');

        $validator
            ->notEmpty('description');

        $validator
            ->notEmpty('atk');

        $validator
            ->notEmpty('def');

        return $validator;
    }
}
