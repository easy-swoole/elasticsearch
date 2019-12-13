<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/10
 * Time: 16:28
 */

namespace EasySwoole\ElasticSearch\Endpoints;


use EasySwoole\ElasticSearch\Exception\RuntimeException;

class DeleteByQueryRethrottle extends AbstractEndpoint
{

    protected $task_id;

    public function getURI(): string
    {
        $task_id = $this->task_id ?? null;

        if (isset($task_id)) {
            return "/_delete_by_query/$task_id/_rethrottle";
        }
        throw new RuntimeException('Missing parameter for the endpoint delete_by_query_rethrottle');
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setTaskId($task_id): DeleteByQueryRethrottle
    {
        if (isset($task_id) !== true) {
            return $this;
        }
        $this->task_id = $task_id;

        return $this;
    }
}