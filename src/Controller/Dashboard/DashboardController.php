<?php
/**
 * Created by PhpStorm.
 * User: jean.maciel
 * Date: 25/04/2018
 * Time: 15:11
 */

namespace App\Controller\Dashboard;


use App\Controller\AppController;
use Cake\Event\Event;

class DashboardController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Auth', [
            'loginAction' => [
                'controller' => 'Monitors',
                'action' => 'login',
            ],
            'authError' => 'Ops... you\'re not allowed to see this page!',
            'authenticate' => [
                'Form' => [
                    'fields' => ['username' => 'username', 'password' => 'password'],
                    'userModel' => 'Monitors'
                ],
            ],
        ]);
        $this->viewBuilder()->setLayout('dashboard');
    }

    public function beforeRender(Event $event)
    {
        if ($this->Auth->user())
            $this->set('_user', $this->Auth->user());
        return parent::beforeRender($event);
    }
}