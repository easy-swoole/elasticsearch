<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/10
 * Time: 11:37
 */

namespace EasySwoole\ElasticSearch\RequestBean;


class Count extends AbstractBean
{
    protected $index;
    protected $type;
    protected $ignore_unavailable;
    protected $ignore_throttled;
    protected $allow_no_indices;
    protected $expand_wildcards;
    protected $min_score;
    protected $preference;
    protected $routing;
    protected $q;
    protected $analyzer;
    protected $analyze_wildcard;
    protected $default_operator;
    protected $df;
    protected $lenient;
    protected $terminate_after;
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
    public function getMinScore()
    {
        return $this->min_score;
    }

    /**
     * @param mixed $min_score
     */
    public function setMinScore($min_score): void
    {
        $this->min_score = $min_score;
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