<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 16:56
 */

namespace EasySwoole\ElasticSearch\RequestBean\Tasks;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Cancel extends AbstractBean
{
    protected $task_id;
    protected $nodes;
    protected $actions;
    protected $parent_task_id;

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


}