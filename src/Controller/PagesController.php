<?php

namespace App\Controller;

use Cake\Console\ShellDispatcher;
use Cake\Event\Event;
use Cake\Http\Exception\UnauthorizedException;

class PagesController extends AppController
{

    public function beforeFilter(Event $event)
    {
        $this->Security->setConfig('unlockedActions', ['updateCode']);
        return parent::beforeFilter($event);
    }

    public function index()
    {
    }

    public function view($page)
    {
        $this->render($page);
    }

    public function updateCode()
    {

        $this->log("");

        $signature = 'sha1=' . hash_hmac('sha1', json_encode($this->request->getData()), "ppgia@2018");

        $git_security = $this->request->getHeader('HTTP_X_HUB_SIGNATURE');

        if ($signature != $git_security)
            throw new UnauthorizedException();

        $shell = new ShellDispatcher();
        $output = $shell->run(['cron', 'github']);

        return $this->response->withStringBody($output);

    }

}