<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/13
 * Time: 9:19
 */

namespace EasySwoole\ElasticSearch\RequestBean;


class MsearchTemplate extends AbstractBean
{
    protected $index;
    protected $type;
    protected $search_type;
    protected $typed_keys;
    protected $max_concurrent_searches;
    protected $rest_total_hits_as_int;
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
    public function getSearchType()
    {
        return $this->search_type;
    }

    /**
     * @param mixed $search_type
     */
    public function setSearchType($search_type): void
    {
        $this->search_type = $search_type;
    }

    /**
     * @return mixed
     */
    public function getTypedKeys()
    {
        return $this->typed_keys;
    }

    /**
     * @param mixed $typed_keys
     */
    public function setTypedKeys($typed_keys): void
    {
        $this->typed_keys = $typed_keys;
    }

    /**
     * @return mixed
     */
    public function getMaxConcurrentSearches()
    {
        return $this->max_concurrent_searches;
    }

    /**
     * @param mixed $max_concurrent_searches
     */
    public function setMaxConcurrentSearches($max_concurrent_searches): void
    {
        $this->max_concurrent_searches = $max_concurrent_searches;
    }

    /**
     * @return mixed
     */
    public function getRestTotalHitsAsInt()
    {
        return $this->rest_total_hits_as_int;
    }

    /**
     * @param mixed $rest_total_hits_as_int
     */
    public function setRestTotalHitsAsInt($rest_total_hits_as_int): void
    {
        $this->rest_total_hits_as_int = $rest_total_hits_as_int;
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