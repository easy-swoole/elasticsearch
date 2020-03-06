<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 16:58
 */

namespace EasySwoole\ElasticSearch\RequestBean\Tasks;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Get extends AbstractBean
{
    protected $task_id;
    protected $wait_for_completion;
    protected $timeout;

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
    public function getWaitForCompletion()
    {
        return $this->wait_for_completion;
    }

    /**
     * @param mixed $wait_for_completion
     */
    public function setWaitForCompletion($wait_for_completion): void
    {
        $this->wait_for_completion = $wait_for_completion;
    }

    /**
     * @return mixed
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @param mixed $timeout
     */
    public function setTimeout($timeout): void
    {
        $this->timeout = $timeout;
    }


}