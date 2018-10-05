<?php
/**
 * Created by PhpStorm.
 * User: Jean Nunes
 * Date: 04/10/2018
 * Time: 23:32
 */

namespace App\Controller\Dashboard;


use Cake\Datasource\ConnectionManager;
use Cake\Event\Event;
use Cake\Utility\Inflector;
use Cake\Utility\Text;
use Phpml\Association\Apriori;

class ApiController extends DashboardController
{

    public function initialize()
    {
        parent::initialize();
    }

    public function beforeRender(Event $event)
    {
        $this->RequestHandler->renderAs($this, 'json');
        return parent::beforeRender($event);
    }

    public function queries($method, $query)
    {
        $allowed = ['execute', 'getInfo', 'apriori'];
        $method = Inflector::variable($method);
        if (is_numeric(array_search($method, $allowed)))
            $this->$method($query);
        else
            throw new \InvalidArgumentException(__('Method {0} does not exist', $method));
    }

    private function execute($slug)
    {
        $this->loadModel('Queries');
        $query = $this->Queries->findBySlug($slug)->firstOrFail();

        $fields = $this->getFields($query->query, true);
        $data = array_merge($fields, $this->request->getData());

        $connection = ConnectionManager::get('default');
        $result = $connection->execute($query->query, $data);

        $this->set([
            'result' => $result->fetchAll('assoc'),
            '_serialize' => 'result'
        ]);
    }

    private function getInfo($slug)
    {
        $this->loadModel('Queries');
        $query = $this->Queries->findBySlug($slug)->firstOrFail();

        $query->fields = $this->getFields($query->query);

        $this->set([
            'query' => $query,
            '_serialize' => 'query'
        ]);
    }

    private function apriori($slug)
    {
        $this->loadModel('Queries');
        $query = $this->Queries->findBySlug($slug)->firstOrFail();

        $fields = $this->getFields($query->query, true);
        $data = array_merge($fields, $this->request->getData());

        $connection = ConnectionManager::get('default');
        $result = $connection->execute($query->query, $data);
        $samples = $result->fetchAll('assoc');

        $labels = array_keys($samples[0]);

        $associator = new Apriori($support = 0.5, $confidence = 0.5);
        $associator->train($samples, $labels);

        $this->set([
            'rules' => $associator->getRules(),
            'frequent_items' => $associator->apriori(),
            '_serialize' => ['rules', 'frequent_items']
        ]);

    }

    private function getFields($query, $m = false)
    {
        preg_match_all('/\:([\w|_]+)/m', $query, $matches, PREG_SET_ORDER, 0);
        return array_map(function ($match) use ($m) {
            if ($m)
                return [$match[1] => null];
            else
                return $match[1];
        }, $matches);
    }

}