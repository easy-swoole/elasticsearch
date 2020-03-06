<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 16:43
 */

namespace EasySwoole\ElasticSearch\RequestBean\Snapshot;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class GetRepository extends AbstractBean
{
    protected $repository;
    protected $master_timeout;
    protected $local;

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
}