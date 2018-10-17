<?php

namespace App\Controller;

use Cake\Http\Exception\UnauthorizedException;

class PagesController extends AppController
{

    public function index()
    {
    }

    public function view($page)
    {
        $this->render($page);
    }

    public function updateCode()
    {

        if (!isset($_SERVER['PHP_AUTH_USER'])) {
            header('WWW-Authenticate: Basic realm="My Realm"');
            header('HTTP/1.0 401 Unauthorized');
            echo 'Text to send if user hits Cancel button';
            exit;
        } else {

            $username = $this->request->getServerParams()['PHP_AUTH_USER'];
            $password = $this->request->getServerParams()['PHP_AUTH_PW'];

            if (!($username == 'ppgia' && $password == 'agito'))
                throw new UnauthorizedException();

            $output = [];
            $output['pull'] = exec("git pull origin master");
            $output['update'] = system('composer update');
            return $this->response->withStringBody(json_encode($output));
        }
    }

}