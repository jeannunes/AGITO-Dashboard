<?php
/**
 * Created by PhpStorm.
 * User: jean.maciel
 * Date: 27/02/2018
 * Time: 15:54
 */

namespace App\Model\Table;

use Cake\ORM\Table;

class GlycemiaTable extends Table
{
    public function initialize(array $config)
    {
        $this->setTable('glycemia_records');
        $this->belongsTo('Users');
    }
}