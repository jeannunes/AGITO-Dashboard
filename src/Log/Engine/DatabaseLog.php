<?php

namespace App\Log\Engine;

use Cake\Log\Engine\BaseLog;
use Cake\ORM\TableRegistry;

class DatabaseLog extends BaseLog
{
    private $Table;
    private $settings;

    public function __construct($options = [])
    {
        parent::__construct($options);

        $this->_defaultConfig = [
            'model' => 'Logs',
            'columns' => [
                'level' => 'level',
                'message' => 'message',
                'context' => 'context'
            ]
        ];

        if ($this->getConfig('model', null) == null)
            return false;

        $this->Table = TableRegistry::getTableLocator()->get($this->getConfig('model'));

    }

    public function log($level, $message, array $context = [])
    {
        $registry = $this->Table->patchEntity($this->Table->newEntity(), [
            $this->getConfig('columns.level') => $level,
            $this->getConfig('columns.message') => $message,
            $this->getConfig('columns.context') => $context
        ]);
        return $this->Table->save($registry);
    }
}