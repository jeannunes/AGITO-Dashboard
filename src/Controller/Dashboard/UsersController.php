<?php
/**
 * Created by PhpStorm.
 * User: jeann
 * Date: 25/07/2018
 * Time: 16:04
 */

namespace App\Controller\Dashboard;


use Cake\Auth\DefaultPasswordHasher;
use Cake\Mailer\MailerAwareTrait;
use Cake\Network\Email\Email;
use Cake\Utility\Security;

class UsersController extends DashboardController
{

    use MailerAwareTrait;

    public function initialize()
    {
        parent::initialize();
        $this->Auth->allow(['add', 'recoverPassword']);
    }

    public function index()
    {
        $users = $this->Users->find();
        $this->set('users', $users);
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is(['PUT', 'POST'])) {

            $user = $this->Users->patchEntity($user, $this->request->getData());

            $password = substr((new DefaultPasswordHasher())->hash(Security::randomBytes(6)), -6);
            $user->password = $password;
            $token = substr((new DefaultPasswordHasher())->hash(Security::randomBytes(32)), -16);
            $user->reset_token = $token;

            if ($this->Users->save($user)) {

                $email = $this->getMailer('User')->send('welcome', [$user, $password]);

                if ($email) {
                    $this->Flash->success(__('{0} has been successfully added to the system. The password has been sent to its email.', $user->first_name));
                    return $this->redirect(['action' => 'index']);
                } else {
                    $this->Flash->error(__('The user could not be added right now. Please, try again!'));
                    $this->Users->delete($user);
                }
            }
            $this->Flash->error(__('The user could not be added right now. Please, try again!'));
        }
        $this->set('user', $user);
    }

    public function recoverPassword($token)
    {
        $this->viewBuilder()->setLayout('auth');
        $user = $this->Users->findByResetToken($token)->firstOrFail();

        if ($this->request->is(['PUT', 'POST'])) {

            $password = $this->request->getData('password');
            $confirm = $this->request->getData('confirm_password');

            if ($password == $confirm) {

                $user->password = $password;
                $user->reset_token = null;

                if ($this->Users->save($user)) {
                    $email = $this->getMailer('User')->send('passwordReseted', [$user]);
                    $this->Flash->success(__('Your password has been updated!'));
                } else {
                    $this->Flash->error(__('Could not update your password now. Please, try again!'));
                }

            } else {
                $this->Flash->error(__('The password and password confirmation doesn\'t match!'));
            }


        }

    }


    public function resetPassword($user_id)
    {
        $user = $this->Users->get($user_id);
        $token = substr((new DefaultPasswordHasher())->hash(Security::randomBytes(32)), -16);
        $user->reset_token = $token;
        if ($this->Users->save($user) && $this->getMailer('User')->send('resetPassword', [$user]))
            $this->Flash->success(__('A reset link has been sent to the user!'));
        else
            $this->Flash->error(__('The reset link could not be sent this time. Please, try again!'));
        return $this->redirect(['action' => 'index']);
    }

}