<?php
/**
 * Created by PhpStorm.
 * User: mayn
 * Date: 2019/12/18
 * Time: 23:27
 */

namespace EasySwoole\ElasticSearch\RequestBean\Indices;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class UpdateAliases extends AbstractBean
{
    protected $timeout;
    protected $master_timeout;
    protected $body;

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