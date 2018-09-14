<?php

namespace App\Model\Table;

use Cake\Event\Event;
use Cake\I18n\Time;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class QueriesTable extends Table
{
    public function initialize(array $config)
    {
        parent::initialize($config);
    }

    public function validationDefault(Validator $validator)
    {
        $validator->requirePresence('slug');
        $validator->requirePresence('title');
        $validator->requirePresence('query');
        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['slug']));
        return $rules;
    }

    public function beforeSave(Event $event)
    {
        $entity = $event->getData('entity');

        if (!$entity->isNew())
            $entity->last_modification_date = Time::now();

        return true;
    }
}