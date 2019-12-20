<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 17:43
 */

namespace EasySwoole\ElasticSearch\RequestBean\Cluster;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Health extends AbstractBean
{
    protected $index;
    protected $expand_wildcards;
    protected $level;
    protected $local;
    protected $master_timeout;
    protected $timeout;
    protected $wait_for_active_shards;
    protected $wait_for_nodes;
    protected $wait_for_events;
    protected $wait_for_no_relocating_shards;
    protected $wait_for_no_initializing_shards;
    protected $wait_for_status;

    /**
     * @return mixed
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param mixed $index
     */
    public function setIndex($index): void
    {
        $this->index = $index;
    }

    /**
     * @return mixed
     */
    public function getExpandWildcards()
    {
        return $this->expand_wildcards;
    }

    /**
     * @param mixed $expand_wildcards
     */
    public function setExpandWildcards($expand_wildcards): void
    {
        $this->expand_wildcards = $expand_wildcards;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level): void
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * @param mixed $local
     */
    public function setLocal($local): void
    {
        $this->local = $local;
    }

    /**
     * @return mixed
     */
    public function getMasterTimeout()
    {
        return $this->master_timeout;
    }

    /**
     * @param mixed $master_timeout
     */
    public function setMasterTimeout($master_timeout): void
    {
        $this->master_timeout = $master_timeout;
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

    /**
     * @return mixed
     */
    public function getWaitForActiveShards()
    {
        return $this->wait_for_active_shards;
    }

    /**
     * @param mixed $wait_for_active_shards
     */
    public function setWaitForActiveShards($wait_for_active_shards): void
    {
        $this->wait_for_active_shards = $wait_for_active_shards;
    }

    /**
     * @return mixed
     */
    public function getWaitForNodes()
    {
        return $this->wait_for_nodes;
    }

    /**
     * @param mixed $wait_for_nodes
     */
    public function setWaitForNodes($wait_for_nodes): void
    {
        $this->wait_for_nodes = $wait_for_nodes;
    }

    /**
     * @return mixed
     */
    public function getWaitForEvents()
    {
        return $this->wait_for_events;
    }

    /**
     * @param mixed $wait_for_events
     */
    public function setWaitForEvents($wait_for_events): void
    {
        $this->wait_for_events = $wait_for_events;
    }

    /**
     * @return mixed
     */
    public function getWaitForNoRelocatingShards()
    {
        return $this->wait_for_no_relocating_shards;
    }

    /**
     * @param mixed $wait_for_no_relocating_shards
     */
    public function setWaitForNoRelocatingShards($wait_for_no_relocating_shards): void
    {
        $this->wait_for_no_relocating_shards = $wait_for_no_relocating_shards;
    }

    /**
     * @return mixed
     */
    public function getWaitForNoInitializingShards()
    {
        return $this->wait_for_no_initializing_shards;
    }

    /**
     * @param mixed $wait_for_no_initializing_shards
     */
    public function setWaitForNoInitializingShards($wait_for_no_initializing_shards): void
    {
        $this->wait_for_no_initializing_shards = $wait_for_no_initializing_shards;
    }

    /**
     * @return mixed
     */
    public function getWaitForStatus()
    {
        return $this->wait_for_status;
    }

    /**
     * @param mixed $wait_for_status
     */
    public function setWaitForStatus($wait_for_status): void
    {
        $this->wait_for_status = $wait_for_status;
    }


}