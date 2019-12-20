<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 16:59
 */

namespace EasySwoole\ElasticSearch\RequestBean\Tasks;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class ListTasks extends AbstractBean
{
    protected $nodes;
    protected $actions;
    protected $detailed;
    protected $parent_task_id;
    protected $wait_for_completion;
    protected $group_by;
    protected $timeout;

    /**
     * @return mixed
     */
    public function getNodes()
    {
        return $this->nodes;
    }

    /**
     * @param mixed $nodes
     */
    public function setNodes($nodes): void
    {
        $this->nodes = $nodes;
    }

    /**
     * @return mixed
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * @param mixed $actions
     */
    public function setActions($actions): void
    {
        $this->actions = $actions;
    }

    /**
     * @return mixed
     */
    public function getDetailed()
    {
        return $this->detailed;
    }

    /**
     * @param mixed $detailed
     */
    public function setDetailed($detailed): void
    {
        $this->detailed = $detailed;
    }

    /**
     * @return mixed
     */
    public function getParentTaskId()
    {
        return $this->parent_task_id;
    }

    /**
     * @param mixed $parent_task_id
     */
    public function setParentTaskId($parent_task_id): void
    {
        $this->parent_task_id = $parent_task_id;
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
    public function getGroupBy()
    {
        return $this->group_by;
    }

    /**
     * @param mixed $group_by
     */
    public function setGroupBy($group_by): void
    {
        $this->group_by = $group_by;
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