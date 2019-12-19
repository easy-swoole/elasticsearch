<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 11:06
 */

namespace EasySwoole\ElasticSearch\Endpoints\Tasks;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Cancel extends AbstractEndpoint
{
    protected $task_id;

    public function getURI(): string
    {
        $task_id = $this->task_id ?? null;

        if (isset($task_id)) {
            return "/_tasks/$task_id/_cancel";
        }
        return "/_tasks/_cancel";
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setTaskId($task_id): Cancel
    {
        if (isset($task_id) !== true) {
            return $this;
        }
        $this->task_id = $task_id;

        return $this;
    }
}