<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 17:48
 */

namespace EasySwoole\ElasticSearch\RequestBean\Cluster;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class PendingTasks extends AbstractBean
{
    protected $local;
    protected $master_timeout;

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


}