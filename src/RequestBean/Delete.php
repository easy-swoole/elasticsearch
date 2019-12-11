<?php


namespace EasySwoole\ElasticSearch\RequestBean;


class Delete extends AbstractBean
{
    protected $id;
    protected $index;
    protected $type;
    protected $wait_for_active_shards;
    protected $refresh;
    protected $routing;
    protected $timeout;
    protected $if_seq_no;
    protected $if_primary_term;
    protected $version;
    protected $version_type;

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
    public function getIfSeqNo()
    {
        return $this->if_seq_no;
    }

    /**
     * @param mixed $if_seq_no
     */
    public function setIfSeqNo($if_seq_no): void
    {
        $this->if_seq_no = $if_seq_no;
    }

    /**
     * @return mixed
     */
    public function getIfPrimaryTerm()
    {
        return $this->if_primary_term;
    }

    /**
     * @param mixed $if_primary_term
     */
    public function setIfPrimaryTerm($if_primary_term): void
    {
        $this->if_primary_term = $if_primary_term;
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
}