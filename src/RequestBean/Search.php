<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/13
 * Time: 10:18
 */

namespace EasySwoole\ElasticSearch\RequestBean;


class Search extends AbstractBean
{

    protected $index;
    protected $type;
    protected $analyzer;
    protected $analyze_wildcard;
    protected $ccs_minimize_roundtrips;
    protected $default_operator;
    protected $df;
    protected $explain;
    protected $stored_fields;
    protected $docvalue_fields;
    protected $from;
    protected $ignore_unavailable;
    protected $ignore_throttled;
    protected $allow_no_indices;
    protected $expand_wildcards;
    protected $lenient;
    protected $preference;
    protected $q;
    protected $routing;
    protected $scroll;
    protected $search_type;
    protected $size;
    protected $sort;
    protected $_source;
    protected $_source_excludes;
    protected $_source_includes;
    protected $terminate_after;
    protected $stats;
    protected $suggest_field;
    protected $suggest_mode;
    protected $suggest_size;
    protected $suggest_text;
    protected $timeout;
    protected $track_scores;
    protected $track_total_hits;
    protected $allow_partial_search_results;
    protected $typed_keys;
    protected $version;
    protected $seq_no_primary_term;
    protected $request_cache;
    protected $batched_reduce_size;
    protected $max_concurrent_shard_requests;
    protected $pre_filter_shard_size;
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
    public function getAnalyzer()
    {
        return $this->analyzer;
    }

    /**
     * @param mixed $analyzer
     */
    public function setAnalyzer($analyzer): void
    {
        $this->analyzer = $analyzer;
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
    public function getCcsMinimizeRoundtrips()
    {
        return $this->ccs_minimize_roundtrips;
    }

    /**
     * @param mixed $ccs_minimize_roundtrips
     */
    public function setCcsMinimizeRoundtrips($ccs_minimize_roundtrips): void
    {
        $this->ccs_minimize_roundtrips = $ccs_minimize_roundtrips;
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
    public function getStoredFields()
    {
        return $this->stored_fields;
    }

    /**
     * @param mixed $stored_fields
     */
    public function setStoredFields($stored_fields): void
    {
        $this->stored_fields = $stored_fields;
    }

    /**
     * @return mixed
     */
    public function getDocvalueFields()
    {
        return $this->docvalue_fields;
    }

    /**
     * @param mixed $docvalue_fields
     */
    public function setDocvalueFields($docvalue_fields): void
    {
        $this->docvalue_fields = $docvalue_fields;
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
    public function getSuggestField()
    {
        return $this->suggest_field;
    }

    /**
     * @param mixed $suggest_field
     */
    public function setSuggestField($suggest_field): void
    {
        $this->suggest_field = $suggest_field;
    }

    /**
     * @return mixed
     */
    public function getSuggestMode()
    {
        return $this->suggest_mode;
    }

    /**
     * @param mixed $suggest_mode
     */
    public function setSuggestMode($suggest_mode): void
    {
        $this->suggest_mode = $suggest_mode;
    }

    /**
     * @return mixed
     */
    public function getSuggestSize()
    {
        return $this->suggest_size;
    }

    /**
     * @param mixed $suggest_size
     */
    public function setSuggestSize($suggest_size): void
    {
        $this->suggest_size = $suggest_size;
    }

    /**
     * @return mixed
     */
    public function getSuggestText()
    {
        return $this->suggest_text;
    }

    /**
     * @param mixed $suggest_text
     */
    public function setSuggestText($suggest_text): void
    {
        $this->suggest_text = $suggest_text;
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
    public function getTrackScores()
    {
        return $this->track_scores;
    }

    /**
     * @param mixed $track_scores
     */
    public function setTrackScores($track_scores): void
    {
        $this->track_scores = $track_scores;
    }

    /**
     * @return mixed
     */
    public function getTrackTotalHits()
    {
        return $this->track_total_hits;
    }

    /**
     * @param mixed $track_total_hits
     */
    public function setTrackTotalHits($track_total_hits): void
    {
        $this->track_total_hits = $track_total_hits;
    }

    /**
     * @return mixed
     */
    public function getAllowPartialSearchResults()
    {
        return $this->allow_partial_search_results;
    }

    /**
     * @param mixed $allow_partial_search_results
     */
    public function setAllowPartialSearchResults($allow_partial_search_results): void
    {
        $this->allow_partial_search_results = $allow_partial_search_results;
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
    public function getSeqNoPrimaryTerm()
    {
        return $this->seq_no_primary_term;
    }

    /**
     * @param mixed $seq_no_primary_term
     */
    public function setSeqNoPrimaryTerm($seq_no_primary_term): void
    {
        $this->seq_no_primary_term = $seq_no_primary_term;
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
    public function getBatchedReduceSize()
    {
        return $this->batched_reduce_size;
    }

    /**
     * @param mixed $batched_reduce_size
     */
    public function setBatchedReduceSize($batched_reduce_size): void
    {
        $this->batched_reduce_size = $batched_reduce_size;
    }

    /**
     * @return mixed
     */
    public function getMaxConcurrentShardRequests()
    {
        return $this->max_concurrent_shard_requests;
    }

    /**
     * @param mixed $max_concurrent_shard_requests
     */
    public function setMaxConcurrentShardRequests($max_concurrent_shard_requests): void
    {
        $this->max_concurrent_shard_requests = $max_concurrent_shard_requests;
    }

    /**
     * @return mixed
     */
    public function getPreFilterShardSize()
    {
        return $this->pre_filter_shard_size;
    }

    /**
     * @param mixed $pre_filter_shard_size
     */
    public function setPreFilterShardSize($pre_filter_shard_size): void
    {
        $this->pre_filter_shard_size = $pre_filter_shard_size;
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