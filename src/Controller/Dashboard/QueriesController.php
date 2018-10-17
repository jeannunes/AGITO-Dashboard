<?php
/**
 * Created by PhpStorm.
 * User: jeann
 * Date: 25/07/2018
 * Time: 16:18
 */

namespace App\Controller\Dashboard;

use Cake\Http\Client;
use Cake\I18n\Time;

class QueriesController extends DashboardController
{
    public function index()
    {
        $queries = $this->Queries->find();
        $this->set('queries', $queries);
    }

    public function add()
    {
        $query = $this->Queries->newEntity();
        if ($this->request->is(['PUT', 'POST'])) {
            $query = $this->Queries->patchEntity($query, $this->request->getData());
            $query->last_modification_user = $this->Auth->user('id');
            if ($this->Queries->save($query))
                $this->Flash->success(__('The query has been successfully added!'));
            else
                $this->Flash->error(__('The query could not be added this time. Please, try again!'));
        }
        $this->set([
            'query' => $query
        ]);
    }

    public function edit($slug)
    {
        $query = $this->Queries->findBySlug($slug)->where(['padlock = 0'])->contain(['Monitors'])->firstOrFail();

        if ($this->request->is(['PUT', 'POST'])) {

            $query = $this->Queries->patchEntity($query, $this->request->getData(), [
                'fields' => ['title', 'description', 'query']
            ]);

            $query->last_modification_date = Time::now();
            $query->last_modification_user = $this->Auth->user('id');

            if ($this->Queries->save($query)) {
                $this->Flash->success(__('The query has been successfully updated!'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The query could not be updated this time. Please, try again!'));
            }
        }
        $this->set([
            'query' => $query
        ]);
    }

    public function execute($slug)
    {
        $query = $this->Queries->findBySlug($slug)->firstOrFail();

        $fields = [
            '1', '2', '3', '4', '5'
        ];

        $this->set([
            'query' => $query,
            'fields' => $fields
        ]);
    }
}