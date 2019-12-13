<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/13
 * Time: 11:17
 */

namespace EasySwoole\ElasticSearch\Endpoints;


use EasySwoole\ElasticSearch\Exception\RuntimeException;

class UpdateByQueryRethrottle extends AbstractEndpoint
{
    protected $task_id;

    public function getURI(): string
    {
        $task_id = $this->task_id ?? null;

        if (isset($task_id)) {
            return "/_update_by_query/$task_id/_rethrottle";
        }
        throw new RuntimeException('Missing parameter for the endpoint update_by_query_rethrottle');
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setTaskId($task_id): UpdateByQueryRethrottle
    {
        if (isset($task_id) !== true) {
            return $this;
        }
        $this->task_id = $task_id;

        return $this;
    }
}