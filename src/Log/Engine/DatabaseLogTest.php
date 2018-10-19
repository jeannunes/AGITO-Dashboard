<?php
/**
 * Created by PhpStorm.
 * User: Jean Nunes
 * Date: 10/17/2018
 * Time: 10:30 PM
 */

namespace App\Log\Engine;


class DatabaseLogTest extends \PHPUnit_Framework_TestCase
{

    public function testLog($level, $message)
    {
        return !is_null($level);
    }
}
