<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 11:06
 */

namespace EasySwoole\ElasticSearch\Endpoints\Tasks;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;
use EasySwoole\ElasticSearch\Exception\RuntimeException;

class Get extends AbstractEndpoint
{
    protected $task_id;

    public function getURI(): string
    {
        $task_id = $this->task_id ?? null;

        if (isset($task_id)) {
            return "/_tasks/$task_id";
        }
        throw new RuntimeException('Missing parameter for the endpoint tasks.get');
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setTaskId($task_id): Get
    {
        if (isset($task_id) !== true) {
            return $this;
        }
        $this->task_id = $task_id;

        return $this;
    }
}