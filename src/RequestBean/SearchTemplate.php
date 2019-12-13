<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/13
 * Time: 10:18
 */

namespace EasySwoole\ElasticSearch\RequestBean;


class SearchTemplate extends AbstractBean
{

    protected $index;
    protected $type;
    protected $ignore_unavailable;
    protected $ignore_throttled;
    protected $allow_no_indices;
    protected $expand_wildcards;
    protected $preference;
    protected $routing;
    protected $scroll;
    protected $search_type;
    protected $explain;
    protected $profile;
    protected $typed_keys;
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
    public function getIgnoreThrottled()
    {
        return $this->ignore_throttled;
    }

    /**
     * @param mixed $ignore_throttled
     */
    public function setIgnoreThrottled($ignore_throttled): void
    {
        $this->ignore_throttled = $ignore_throttled;
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
    public function getPreference()
    {
        return $this->preference;
    }

    /**
     * @param mixed $preference
     */
    public function setPreference($preference): void
    {
        $this->preference = $preference;
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
    public function getScroll()
    {
        return $this->scroll;
    }

    /**
     * @param mixed $scroll
     */
    public function setScroll($scroll): void
    {
        $this->scroll = $scroll;
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
    public function getExplain()
    {
        return $this->explain;
    }

    /**
     * @param mixed $explain
     */
    public function setExplain($explain): void
    {
        $this->explain = $explain;
    }

    /**
     * @return mixed
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * @param mixed $profile
     */
    public function setProfile($profile): void
    {
        $this->profile = $profile;
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