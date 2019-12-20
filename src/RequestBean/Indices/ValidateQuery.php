<?php
/**
 * Created by PhpStorm.
 * User: mayn
 * Date: 2019/12/18
 * Time: 23:29
 */

namespace EasySwoole\ElasticSearch\RequestBean\Indices;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class ValidateQuery extends AbstractBean
{
    protected $index;
    protected $type;
    protected $explain;
    protected $ignore_unavailable;
    protected $allow_no_indices;
    protected $expand_wildcards;
    protected $q;
    protected $analyzer;
    protected $analyze_wildcard;
    protected $default_operator;
    protected $df;
    protected $lenient;
    protected $rewrite;
    protected $all_shards;
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
    public function getRewrite()
    {
        return $this->rewrite;
    }

    /**
     * @param mixed $rewrite
     */
    public function setRewrite($rewrite): void
    {
        $this->rewrite = $rewrite;
    }

    /**
     * @return mixed
     */
    public function getAllShards()
    {
        return $this->all_shards;
    }

    /**
     * @param mixed $all_shards
     */
    public function setAllShards($all_shards): void
    {
        $this->all_shards = $all_shards;
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