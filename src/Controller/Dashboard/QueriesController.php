<?php
/**
 * Created by PhpStorm.
 * User: jeann
 * Date: 25/07/2018
 * Time: 16:18
 */

namespace App\Controller\Dashboard;

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
        $this->set('query', $query);
    }

    public function execute($query_id)
    {

    }
}