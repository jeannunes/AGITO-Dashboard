<?php
/**
 * Created by PhpStorm.
 * User: jean.maciel
 * Date: 25/04/2018
 * Time: 15:52
 */

namespace App\Model\Entity;


use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class Monitor extends Entity
{
    protected function _setPassword($password){
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}