<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class CardsTable extends Table
{

    public function initialize(array $config)
    {
        $this->displayField('name');

        $this->belongsToMany('Characters');
    }

    public function validationDefault(Validator $validator)
    {

        $validator
            ->notEmpty('name');

        $validator
            ->notEmpty('description');

        $validator
            ->integer('atk')
            ->notEmpty('atk');

        $validator
            ->integer('def')
            ->notEmpty('def');

        return $validator;
    }
}
