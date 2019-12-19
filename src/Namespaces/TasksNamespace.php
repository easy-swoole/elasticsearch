<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 17:04
 */

namespace EasySwoole\ElasticSearch\Namespaces;

use EasySwoole\ElasticSearch\Endpoints\Tasks;
use EasySwoole\ElasticSearch\RequestBean\Tasks\Cancel;
use EasySwoole\ElasticSearch\RequestBean\Tasks\Get;
use EasySwoole\ElasticSearch\RequestBean\Tasks\ListTasks;

class TasksNamespace extends AbstractNamespace
{

    public function cancel(Cancel $bean)
    {
        $endpoint = new Tasks\Cancel();
        $endpoint->setTaskId($bean->getTaskId());
        $endpoint->setParams($bean->toArrayWithFilter(['task_id'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function get(Get $bean)
    {
        $endpoint = new Tasks\Get();
        $endpoint->setTaskId($bean->getTaskId());
        $endpoint->setParams($bean->toArrayWithFilter(['task_id'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function list(ListTasks $bean)
    {
        $endpoint = new Tasks\ListTasks();
        $endpoint->setParams($bean->toArray(null, $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function tasksList(ListTasks $bean)
    {
        return $this->list($bean);
    }
}