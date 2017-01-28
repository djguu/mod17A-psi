<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;

class CharactersTable extends Table
{

    public function initialize(array $config)
    {
        $this->displayField('name');

        $this->hasOne('Users'));

        $this->belongsToMany('Cards');
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
