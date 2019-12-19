<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 16:36
 */

namespace EasySwoole\ElasticSearch\RequestBean\Snapshot;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Delete extends AbstractBean
{
    protected $repository;
    protected $snapshot;
    protected $master_timeout;

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


}