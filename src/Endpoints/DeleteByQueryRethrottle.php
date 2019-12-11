<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/10
 * Time: 16:28
 */

namespace EasySwoole\ElasticSearch\Endpoints;


use EasySwoole\ElasticSearch\Exception\RuntimeException;
use EasySwoole\HttpClient\HttpClient;

class DeleteByQueryRethrottle extends AbstractEndpoint
{
    protected $task_id;

    public function getMethod()
    {
        return HttpClient::METHOD_POST;
    }

    public function getUri()
    {
        $task_id = $this->getTaskId() ?? null;

        if (!empty($task_id)) {
            return "/_delete_by_query/$task_id/_rethrottle";
        }
        throw new RuntimeException('Missing parameter for the endpoint delete_by_query_rethrottle');
    }

    public function setTaskId($taskId)
    {
        $this->task_id = $taskId;
        return $this;
    }

    public function getTaskId()
    {
        return $this->task_id;
    }
}