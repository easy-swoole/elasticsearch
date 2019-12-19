<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 15:37
 */

namespace EasySwoole\ElasticSearch\RequestBean\Nodes;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class HotThreads extends AbstractBean
{
    protected $node_id;
    protected $interval;
    protected $snapshots;
    protected $threads;
    protected $ignore_idle_threads;
    protected $type;
    protected $timeout;

    /**
     * @return mixed
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * @param mixed $node_id
     */
    public function setNodeId($node_id): void
    {
        $this->node_id = $node_id;
    }

    /**
     * @return mixed
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * @param mixed $interval
     */
    public function setInterval($interval): void
    {
        $this->interval = $interval;
    }

    /**
     * @return mixed
     */
    public function getSnapshots()
    {
        return $this->snapshots;
    }

    /**
     * @param mixed $snapshots
     */
    public function setSnapshots($snapshots): void
    {
        $this->snapshots = $snapshots;
    }

    /**
     * @return mixed
     */
    public function getThreads()
    {
        return $this->threads;
    }

    /**
     * @param mixed $threads
     */
    public function setThreads($threads): void
    {
        $this->threads = $threads;
    }

    /**
     * @return mixed
     */
    public function getIgnoreIdleThreads()
    {
        return $this->ignore_idle_threads;
    }

    /**
     * @param mixed $ignore_idle_threads
     */
    public function setIgnoreIdleThreads($ignore_idle_threads): void
    {
        $this->ignore_idle_threads = $ignore_idle_threads;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
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