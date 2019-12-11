<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/11
 * Time: 13:52
 */

namespace EasySwoole\ElasticSearch\RequestBean;


class Explain extends AbstractBean
{
    protected $id;
    protected $index;
    protected $type;
    protected $analyze_wildcard;
    protected $analyzer;
    protected $default_operator;
    protected $df;
    protected $stored_fields;
    protected $lenient;
    protected $preference;
    protected $q;
    protected $routing;
    protected $_source;
    protected $_source_excludes;
    protected $_source_includes;
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