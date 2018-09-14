<?php

namespace App\Controller\Api;

use Cake\Auth\DefaultPasswordHasher;
use Cake\Datasource\Exception\RecordNotFoundException;
use Cake\Event\Event;
use Cake\I18n\Time;
use Cake\Network\Exception\InternalErrorException;
use Cake\Network\Exception\UnauthorizedException;
use Cake\Utility\Security;

class UsersController extends ApiController
{
    public function beforeFilter(Event $event)
    {
        // Allows unauthenticated actions to register and login
        $this->Auth->allow(['register', 'login']);
        return parent::beforeFilter($event);
    }

    public function login()
    {
        // Allows only PUT or POST methods
        $this->request->allowMethod(['put', 'post']);

        // Gets request data
        $username = $this->request->getData('username');
        $password = $this->request->getData('password');

        // Searches for the user
        $user = $this->Users->findByUsername($username)->first();

        // In case we cannot find the user, thows an exception
        if (!$user)
            throw new RecordNotFoundException(__('Username not found'));

        // Creates an instance of the password hasher
        $hasher = new DefaultPasswordHasher();

        // Compare the passwords and in case they mismatch, throw an exception
        if (!$hasher->check($password, $user->password))
            throw new UnauthorizedException(__('Password mismatch'));

        // Generates a new api key
        $api_key = Security::hash(Security::randomBytes(32), 'sha256', false);

        // Store the api key in the user entity
        $user->api_key = $api_key;
        $user->last_login = Time::now();

        // In case the system fails on saving the entity, throws an exception
        if (!$this->Users->save($user))
            throw new InternalErrorException(__('Could not generate the access key right now. Please, try again!'));

        $user = $user->toArray() + ["api_key" => $api_key];

        // Returns user data and api_key
        $this->set([
            'user' => $user
        ]);
        $this->set('_serialize', ['user', 'api_key']);
    }

    public function register()
    {
        // Allows only PUT or POST methods
        $this->request->allowMethod(['put', 'post']);

        // Creates a new user entity
        $user = $this->Users->newEntity();

        // Patches the data
        $user = $this->Users->patchEntity($user, $this->request->getData());

        $user->api_key = Security::hash(Security::randomBytes(32), 'sha256', false);

        // Tries to save the entity, or throws an exception in case there's an error
        if (!$this->Users->save($user))
            throw new \Exception(__('Could not add the user right now. Please, try again!'));

        // Returns the newly registered user's data
        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }
}