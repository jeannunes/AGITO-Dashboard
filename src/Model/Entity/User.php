<?php
/**
 * Created by PhpStorm.
 * User: jean.maciel
 * Date: 27/02/2018
 * Time: 15:55
 */

namespace App\Model\Entity;


use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class User extends Entity
{
    public $_accessible = [
        '*' => true,
        'id' => false
    ];
    public $_hidden = [
        'password', 'api_key', 'reset_token'
    ];

    public $_virtual = ['full_name', 'first_name', 'last_name'];

    // Compatibility
    protected function _getFullName()
    {
        return $this->_properties['name'];
    }

    protected function _getFirstName()
    {
        $temp = explode(' ', $this->_properties['name']);
        return $temp[0];
    }

    protected function _getLastName()
    {
        $temp = explode(' ', $this->_properties['name']);
        array_shift($temp);
        return join(" ", $temp);
    }

    protected function _setPassword($value)
    {
        return $this->hash($value);
    }

    protected function _setApiKey($value)
    {
        return $this->hash($value);
    }

    private function hash($value)
    {
        if (strlen($value)) {
            $hasher = new DefaultPasswordHasher();
            return $hasher->hash($value);
        }
    }

}