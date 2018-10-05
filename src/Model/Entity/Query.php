<?php
/**
 * Created by PhpStorm.
 * User: jeann
 * Date: 25/07/2018
 * Time: 16:45
 */

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Cake\Utility\Text;

class Query extends Entity
{
    public $_accessible = [
        'id' => false,
        '*' => true
    ];

    public $_hidden = ['id'];

    protected function _setSlug($value)
    {
        if (is_null($value))
            return $value;
        return Text::slug($value);
    }
}