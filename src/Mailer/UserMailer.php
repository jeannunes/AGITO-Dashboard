<?php


namespace App\Mailer;

use ArrayObject;
use Cake\Datasource\EntityInterface;
use Cake\Event\Event;
use Cake\Mailer\Mailer;

class UserMailer extends Mailer
{
    public function welcome($user, $password)
    {
        $this
            ->setTo($user->email)
            ->setSubject(__('AGITO Account', $user->first_name))
            ->setTemplate('welcome_mail', 'custom')
            ->setEmailFormat('html')
            ->setViewVars(['user' => $user, 'password' => $password]);
    }

    public function resetPassword($user)
    {
        $this
            ->setEmailFormat('html')
            ->setTo($user->email)
            ->setReplyTo('noreply@pucpr.edu.br')
            ->setSubject(__('Password Reset'))
            ->setTemplate('reset_password')
            ->setViewVars(['user' => $user]);
    }

    public function passwordReseted($user)
    {
        $this
            ->setEmailFormat('html')
            ->setTo($user->email)
            ->setReplyTo('noreply@pucpr.edu.br')
            ->setSubject(__('Password updated!'))
            ->setTemplate('password_reseted')
            ->setViewVars(['user' => $user]);
    }

}