<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/13
 * Time: 10:18
 */

namespace EasySwoole\ElasticSearch\RequestBean;


class Update extends AbstractBean
{

    protected $id;
    protected $index;
    protected $type;
    protected $wait_for_active_shards;
    protected $_source;
    protected $_source_excludes;
    protected $_source_includes;
    protected $lang;
    protected $refresh;
    protected $retry_on_conflict;
    protected $routing;
    protected $timeout;
    protected $if_seq_no;
    protected $if_primary_term;
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
    public function getSource()
    {
        return $this->_source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source): void
    {
        $this->_source = $source;
    }

    /**
     * @return mixed
     */
    public function getSourceExcludes()
    {
        return $this->_source_excludes;
    }

    /**
     * @param mixed $source_excludes
     */
    public function setSourceExcludes($source_excludes): void
    {
        $this->_source_excludes = $source_excludes;
    }

    /**
     * @return mixed
     */
    public function getSourceIncludes()
    {
        return $this->_source_includes;
    }

    /**
     * @param mixed $source_includes
     */
    public function setSourceIncludes($source_includes): void
    {
        $this->_source_includes = $source_includes;
    }

    /**
     * @return mixed
     */
    public function getLang()
    {
        return $this->lang;
    }

    /**
     * @param mixed $lang
     */
    public function setLang($lang): void
    {
        $this->lang = $lang;
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
    public function getRetryOnConflict()
    {
        return $this->retry_on_conflict;
    }

    /**
     * @param mixed $retry_on_conflict
     */
    public function setRetryOnConflict($retry_on_conflict): void
    {
        $this->retry_on_conflict = $retry_on_conflict;
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