<?php
/**
 * Created by PhpStorm.
 * User: Jean Nunes
 * Date: 10/19/2018
 * Time: 5:32 PM
 */

namespace App\Shell;


use Cake\Console\Shell;

class CronShell extends Shell
{

    public function github()
    {
        $this->out("Starting github pull...");
        $this->out(system('git pull origin master'));
    }

}