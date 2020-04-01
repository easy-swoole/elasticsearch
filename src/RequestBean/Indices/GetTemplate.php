<?php
/**
 * Created by PhpStorm.
 * User: mayn
 * Date: 2019/12/18
 * Time: 23:02
 */

namespace EasySwoole\ElasticSearch\RequestBean\Indices;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class GetTemplate extends AbstractBean
{
    protected $name;
    protected $include_type_name;
    protected $flat_settings;
    protected $master_timeout;
    protected $local;

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
    public function getFlatSettings()
    {
        return $this->flat_settings;
    }

    /**
     * @param mixed $flat_settings
     */
    public function setFlatSettings($flat_settings): void
    {
        $this->flat_settings = $flat_settings;
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