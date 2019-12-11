<?php


namespace EasySwoole\ElasticSearch\RequestBean;


class Create extends AbstractBean
{
    protected $id;
    protected $index;
    protected $type;
    protected $wait_for_active_shards;
    protected $refresh;
    protected $routing;
    protected $timeout;
    protected $version;
    protected $version_type;
    protected $pipeline;
    protected $body;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
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
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
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
    public function getRefresh()
    {
        return $this->refresh;
    }

    /**
     * @param mixed $refresh
     */
    public function setRefresh($refresh): void
    {
        $this->refresh = $refresh;
    }

    /**
     * @return mixed
     */
    public function getRouting()
    {
        return $this->routing;
    }

    /**
     * @param mixed $routing
     */
    public function setRouting($routing): void
    {
        $this->routing = $routing;
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
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param mixed $version
     */
    public function setVersion($version): void
    {
        $this->version = $version;
    }

    /**
     * @return mixed
     */
    public function getVersionType()
    {
        return $this->version_type;
    }

    /**
     * @param mixed $version_type
     */
    public function setVersionType($version_type): void
    {
        $this->version_type = $version_type;
    }

    /**
     * @return mixed
     */
    public function getPipeline()
    {
        return $this->pipeline;
    }

    /**
     * @param mixed $pipeline
     */
    public function setPipeline($pipeline): void
    {
        $this->pipeline = $pipeline;
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