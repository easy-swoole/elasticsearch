<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 16:46
 */

namespace EasySwoole\ElasticSearch\RequestBean\Snapshot;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Status extends AbstractBean
{
    protected $repository;
    protected $snapshot;
    protected $master_timeout;
    protected $ignore_unavailable;

    /**
     * @return mixed
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param mixed $repository
     */
    public function setRepository($repository): void
    {
        $this->repository = $repository;
    }

    /**
     * @return mixed
     */
    public function getSnapshot()
    {
        return $this->snapshot;
    }

    /**
     * @param mixed $snapshot
     */
    public function setSnapshot($snapshot): void
    {
        $this->snapshot = $snapshot;
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
    public function getIgnoreUnavailable()
    {
        return $this->ignore_unavailable;
    }

    /**
     * @param mixed $ignore_unavailable
     */
    public function setIgnoreUnavailable($ignore_unavailable): void
    {
        $this->ignore_unavailable = $ignore_unavailable;
    }
}