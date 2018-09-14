<?php

namespace App\Controller\PublicApi;

use App\Controller\AppController;
use Firebase\JWT\JWT;

class PagesController extends AppController
{
    public function initialize()
    {
        $this->viewBuilder()->setLayout('api');
        parent::initialize();
        JWT::decode();
    }

    public function view($page)
    {

    }
}
