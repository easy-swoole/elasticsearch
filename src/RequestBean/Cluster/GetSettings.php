<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 17:41
 */

namespace EasySwoole\ElasticSearch\RequestBean\Cluster;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class GetSettings extends AbstractBean
{

    protected $flat_settings;
    protected $master_timeout;
    protected $timeout;
    protected $include_defaults;

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
    public function getIncludeDefaults()
    {
        return $this->include_defaults;
    }

    /**
     * @param mixed $include_defaults
     */
    public function setIncludeDefaults($include_defaults): void
    {
        $this->include_defaults = $include_defaults;
    }


}