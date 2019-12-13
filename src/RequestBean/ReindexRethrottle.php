<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/13
 * Time: 10:18
 */

namespace EasySwoole\ElasticSearch\RequestBean;


class ReindexRethrottle extends AbstractBean
{
    protected $task_id;
    protected $requests_per_second;

    /**
     * @return mixed
     */
    public function getTaskId()
    {
        return $this->task_id;
    }

    /**
     * @param mixed $task_id
     */
    public function setTaskId($task_id): void
    {
        $this->task_id = $task_id;
    }

    /**
     * @return mixed
     */
    public function getRequestsPerSecond()
    {
        return $this->requests_per_second;
    }

    /**
     * @param mixed $requests_per_second
     */
    public function setRequestsPerSecond($requests_per_second): void
    {
        $this->requests_per_second = $requests_per_second;
    }
}