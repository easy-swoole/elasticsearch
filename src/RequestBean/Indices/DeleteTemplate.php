<?php
/**
 * Created by PhpStorm.
 * User: mayn
 * Date: 2019/12/18
 * Time: 22:36
 */

namespace EasySwoole\ElasticSearch\RequestBean\Indices;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class DeleteTemplate extends AbstractBean
{
    protected $name;
    protected $timeout;
    protected $master_timeout;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
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