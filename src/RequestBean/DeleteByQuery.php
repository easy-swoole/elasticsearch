<?php


namespace EasySwoole\ElasticSearch\RequestBean;


class DeleteByQuery extends AbstractBean
{

    protected $index;
    protected $type;
    protected $analyze_wildcard;
    protected $default_operator;
    protected $df;
    protected $from;
    protected $ignore_unavailable;
    protected $allow_no_indices;
    protected $conflicts;
    protected $expand_wildcards;
    protected $lenient;
    protected $preference;
    protected $q;
    protected $routing;
    protected $scroll;
    protected $search_type;
    protected $search_timeout;
    protected $size;
    protected $max_docs;
    protected $sort;
    protected $_source;
    protected $_source_excludes;
    protected $_source_includes;
    protected $terminate_after;
    protected $stats;
    protected $version;
    protected $request_cache;
    protected $refresh;
    protected $timeout;
    protected $wait_for_active_shards;
    protected $scroll_size;
    protected $wait_for_completion;
    protected $requests_per_second;
    protected $slices;
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
    public function getAnalyzeWildcard()
    {
        return $this->analyze_wildcard;
    }

    /**
     * @param mixed $analyze_wildcard
     */
    public function setAnalyzeWildcard($analyze_wildcard): void
    {
        $this->analyze_wildcard = $analyze_wildcard;
    }

    /**
     * @return mixed
     */
    public function getDefaultOperator()
    {
        return $this->default_operator;
    }

    /**
     * @param mixed $default_operator
     */
    public function setDefaultOperator($default_operator): void
    {
        $this->default_operator = $default_operator;
    }

    /**
     * @return mixed
     */
    public function getDf()
    {
        return $this->df;
    }

    /**
     * @param mixed $df
     */
    public function setDf($df): void
    {
        $this->df = $df;
    }

    /**
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * @param mixed $from
     */
    public function setFrom($from): void
    {
        $this->from = $from;
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
    public function getConflicts()
    {
        return $this->conflicts;
    }

    /**
     * @param mixed $conflicts
     */
    public function setConflicts($conflicts): void
    {
        $this->conflicts = $conflicts;
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
    public function getLenient()
    {
        return $this->lenient;
    }

    /**
     * @param mixed $lenient
     */
    public function setLenient($lenient): void
    {
        $this->lenient = $lenient;
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
    public function getQ()
    {
        return $this->q;
    }

    /**
     * @param mixed $q
     */
    public function setQ($q): void
    {
        $this->q = $q;
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
    public function getSearchTimeout()
    {
        return $this->search_timeout;
    }

    /**
     * @param mixed $search_timeout
     */
    public function setSearchTimeout($search_timeout): void
    {
        $this->search_timeout = $search_timeout;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size): void
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getMaxDocs()
    {
        return $this->max_docs;
    }

    /**
     * @param mixed $max_docs
     */
    public function setMaxDocs($max_docs): void
    {
        $this->max_docs = $max_docs;
    }

    /**
     * @return mixed
     */
    public function getSort()
    {
        return $this->sort;
    }

    /**
     * @param mixed $sort
     */
    public function setSort($sort): void
    {
        $this->sort = $sort;
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
    public function getTerminateAfter()
    {
        return $this->terminate_after;
    }

    /**
     * @param mixed $terminate_after
     */
    public function setTerminateAfter($terminate_after): void
    {
        $this->terminate_after = $terminate_after;
    }

    /**
     * @return mixed
     */
    public function getStats()
    {
        return $this->stats;
    }

    /**
     * @param mixed $stats
     */
    public function setStats($stats): void
    {
        $this->stats = $stats;
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
    public function getRequestCache()
    {
        return $this->request_cache;
    }

    /**
     * @param mixed $request_cache
     */
    public function setRequestCache($request_cache): void
    {
        $this->request_cache = $request_cache;
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
    public function getScrollSize()
    {
        return $this->scroll_size;
    }

    /**
     * @param mixed $scroll_size
     */
    public function setScrollSize($scroll_size): void
    {
        $this->scroll_size = $scroll_size;
    }

    /**
     * @return mixed
     */
    public function getWaitForCompletion()
    {
        return $this->wait_for_completion;
    }

    /**
     * @param mixed $wait_for_completion
     */
    public function setWaitForCompletion($wait_for_completion): void
    {
        $this->wait_for_completion = $wait_for_completion;
    }

    /**
     * @return mixed
     */
    public function getRequestsPerSecond()
    {
        return $this->requests_per_second;
    }

    /**
     * @param mixed $requests_per_second
     */
    public function setRequestsPerSecond($requests_per_second): void
    {
        $this->requests_per_second = $requests_per_second;
    }

    /**
     * @return mixed
     */
    public function getSlices()
    {
        return $this->slices;
    }

    /**
     * @param mixed $slices
     */
    public function setSlices($slices): void
    {
        $this->slices = $slices;
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