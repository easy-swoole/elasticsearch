<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/13
 * Time: 10:18
 */

namespace EasySwoole\ElasticSearch\RequestBean;


class Reindex extends AbstractBean
{

    protected $refresh;
    protected $timeout;
    protected $wait_for_active_shards;
    protected $wait_for_completion;
    protected $requests_per_second;
    protected $scroll;
    protected $slices;
    protected $max_docs;
    protected $body;

    /**
     * @return mixed
     */
    public function getRefresh()
    {
        return $this->refresh;
    }

    /**
     * @param mixed $refresh
     */
    public function setRefresh($refresh): void
    {
        $this->refresh = $refresh;
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

    /**
     * @return mixed
     */
    public function getScroll()
    {
        return $this->scroll;
    }

    /**
     * @param mixed $scroll
     */
    public function setScroll($scroll): void
    {
        $this->scroll = $scroll;
    }

    /**
     * @return mixed
     */
    public function getSlices()
    {
        return $this->slices;
    }

    /**
     * @param mixed $slices
     */
    public function setSlices($slices): void
    {
        $this->slices = $slices;
    }

    /**
     * @return mixed
     */
    public function getMaxDocs()
    {
        return $this->max_docs;
    }

    /**
     * @param mixed $max_docs
     */
    public function setMaxDocs($max_docs): void
    {
        $this->max_docs = $max_docs;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body): void
    {
        $this->body = $body;
    }

}