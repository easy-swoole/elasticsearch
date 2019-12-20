<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 17:53
 */

namespace EasySwoole\ElasticSearch\RequestBean\Cluster;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class State extends AbstractBean
{
    protected $metric;
    protected $index;
    protected $local;
    protected $master_timeout;
    protected $flat_settings;
    protected $wait_for_metadata_version;
    protected $wait_for_timeout;
    protected $ignore_unavailable;
    protected $allow_no_indices;
    protected $expand_wildcards;

    /**
     * @return mixed
     */
    public function getMetric()
    {
        return $this->metric;
    }

    /**
     * @param mixed $metric
     */
    public function setMetric($metric): void
    {
        $this->metric = $metric;
    }

    /**
     * @return mixed
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param mixed $index
     */
    public function setIndex($index): void
    {
        $this->index = $index;
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
    public function getWaitForMetadataVersion()
    {
        return $this->wait_for_metadata_version;
    }

    /**
     * @param mixed $wait_for_metadata_version
     */
    public function setWaitForMetadataVersion($wait_for_metadata_version): void
    {
        $this->wait_for_metadata_version = $wait_for_metadata_version;
    }

    /**
     * @return mixed
     */
    public function getWaitForTimeout()
    {
        return $this->wait_for_timeout;
    }

    /**
     * @param mixed $wait_for_timeout
     */
    public function setWaitForTimeout($wait_for_timeout): void
    {
        $this->wait_for_timeout = $wait_for_timeout;
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

    /**
     * @return mixed
     */
    public function getAllowNoIndices()
    {
        return $this->allow_no_indices;
    }

    /**
     * @param mixed $allow_no_indices
     */
    public function setAllowNoIndices($allow_no_indices): void
    {
        $this->allow_no_indices = $allow_no_indices;
    }

    /**
     * @return mixed
     */
    public function getExpandWildcards()
    {
        return $this->expand_wildcards;
    }

    /**
     * @param mixed $expand_wildcards
     */
    public function setExpandWildcards($expand_wildcards): void
    {
        $this->expand_wildcards = $expand_wildcards;
    }


}