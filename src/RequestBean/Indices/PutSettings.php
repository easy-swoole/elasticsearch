<?php
/**
 * Created by PhpStorm.
 * User: mayn
 * Date: 2019/12/18
 * Time: 23:10
 */

namespace EasySwoole\ElasticSearch\RequestBean\Indices;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class PutSettings extends AbstractBean
{
    protected $index;
    protected $master_timeout;
    protected $timeout;
    protected $preserve_existing;
    protected $ignore_unavailable;
    protected $allow_no_indices;
    protected $expand_wildcards;
    protected $flat_settings;
    protected $body;

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
    public function getPreserveExisting()
    {
        return $this->preserve_existing;
    }

    /**
     * @param mixed $preserve_existing
     */
    public function setPreserveExisting($preserve_existing): void
    {
        $this->preserve_existing = $preserve_existing;
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