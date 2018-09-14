<?php
/**
 * Created by PhpStorm.
 * User: jean.maciel
 * Date: 27/02/2018
 * Time: 15:53
 */

namespace App\Model\Table;


use ArrayObject;
use Cake\Auth\DefaultPasswordHasher;
use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\ORM\Table;

class UsersTable extends Table
{
    public function initialize(array $config)
    {
        $this->hasMany('Glycemia');
        parent::initialize($config);
    }

    public function beforeSave(Event $event)
    {
        $entity = $event->getData('entity');

        if ($entity->isNew()) {
//            $hasher = new DefaultPasswordHasher();
//            $entity->password= $hasher->hash($entity->api_key_plain);
        }
        return true;
    }

}