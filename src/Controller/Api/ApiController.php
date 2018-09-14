<?php
/**
 * Created by PhpStorm.
 * User: jean.maciel
 * Date: 28/02/2018
 * Time: 16:53
 */

namespace App\Controller\Api;


use Cake\Controller\Controller;
use Cake\Event\Event;
use Cake\Network\Exception\UnauthorizedException;

class ApiController extends Controller
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('RequestHandler');
        $this->loadComponent('Auth', [
            'authenticate' => [
                'Basic' => [
                    'fields' => ['username' => 'username', 'password' => 'password'],
                    'userModel' => 'Users'
                ],
            ],
            'storage' => 'Memory',
            'unauthorizedRedirect' => false
        ]);
        if ($this->request->getParam('controller') == 'users' && $this->request->getParam('action') == 'login') {
        } else {
            $this->loadModel('Users');
            $user = $this->Users->find()->where([
                'username' => $this->request->getData('username'),
            ])->first();
            if ($user) {
                $this->Auth->setUser($user);
            } else {
                throw new UnauthorizedException();
            }
        }
    }

    public function beforeFilter(Event $event)
    {
        if (!$this->request->getParam('_ext'))
            return $this->redirect(['_ext' => 'json']);
        return parent::beforeFilter($event);
    }
}