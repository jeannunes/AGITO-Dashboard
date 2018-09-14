<?php

namespace App\Controller;

class PagesController extends AppController
{

    public function index()
    {
    }

    public function view($page)
    {
        $this->render($page);
    }

}