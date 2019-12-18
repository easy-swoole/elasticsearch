<?php
/**
 * Created by PhpStorm.
 * User: mayn
 * Date: 2019/12/18
 * Time: 23:18
 */

namespace EasySwoole\ElasticSearch\RequestBean\Indices;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Rollover extends AbstractBean
{
    protected $alias;
    protected $new_index;
    protected $include_type_name;
    protected $timeout;
    protected $dry_run;
    protected $master_timeout;
    protected $wait_for_active_shards;
    protected $body;

    /**
     * @return mixed
     */
    public function getAlias()
    {
        return $this->alias;
    }

    /**
     * @param mixed $alias
     */
    public function setAlias($alias): void
    {
        $this->alias = $alias;
    }

    /**
     * @return mixed
     */
    public function getNewIndex()
    {
        return $this->new_index;
    }

    /**
     * @param mixed $new_index
     */
    public function setNewIndex($new_index): void
    {
        $this->new_index = $new_index;
    }

    /**
     * @return mixed
     */
    public function getIncludeTypeName()
    {
        return $this->include_type_name;
    }

    /**
     * @param mixed $include_type_name
     */
    public function setIncludeTypeName($include_type_name): void
    {
        $this->include_type_name = $include_type_name;
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
    public function getDryRun()
    {
        return $this->dry_run;
    }

    /**
     * @param mixed $dry_run
     */
    public function setDryRun($dry_run): void
    {
        $this->dry_run = $dry_run;
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