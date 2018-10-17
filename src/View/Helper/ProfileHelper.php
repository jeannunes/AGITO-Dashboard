<?php

namespace App\View\Helper;

use Cake\View\Helper;

class ProfileHelper extends Helper
{
    private $User;

    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->User = $this->request->getSession()->read('Auth.User');
    }

    public function is($profiles)
    {
        if (!is_array($profiles))
            $profiles = [$profiles];

        $search = array_search($this->User->profile, $profiles);
        return is_numeric($search);
    }

}
