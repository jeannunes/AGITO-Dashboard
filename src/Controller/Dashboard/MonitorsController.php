<?php

namespace App\Controller\Dashboard;

use Cake\Auth\DefaultPasswordHasher;
use Cake\Mailer\MailerAwareTrait;

class MonitorsController extends DashboardController
{

    use MailerAwareTrait;

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['add']);
    }

    public function login()
    {

        $this->viewBuilder()->setLayout('auth');

        if ($this->request->is(['put', 'post'])) {

            $username = $this->request->getData('username');
            $password = $this->request->getData('password');

            $user = $this->Monitors->findByUsername($username)->first();
            if ($user) {
                if ((new DefaultPasswordHasher())->check($password, $user->password)) {
                    $this->Auth->setUser($user);
                    return $this->redirect(['controller' => 'Pages', 'action' => 'index']);
                } else {
                    $this->Flash->error(__('Incorrect password'));
                }
            } else {
                $this->Flash->error(__('Monitor not found!'));
            }
        }
    }

    public function add()
    {
        $this->viewBuilder()->setLayout('auth');
        $monitor = $this->Monitors->newEntity();
        $this->set('monitor', $monitor);
    }

    public function logout()
    {
        $this->Auth->logout();
        return $this->redirect(['action' => 'login']);
    }
}