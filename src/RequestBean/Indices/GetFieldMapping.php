<?php
/**
 * Created by PhpStorm.
 * User: mayn
 * Date: 2019/12/18
 * Time: 22:56
 */

namespace EasySwoole\ElasticSearch\RequestBean\Indices;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class GetFieldMapping extends AbstractBean
{
    protected $fields;
    protected $index;
    protected $type;
    protected $include_type_name;
    protected $include_defaults;
    protected $ignore_unavailable;
    protected $allow_no_indices;
    protected $expand_wildcards;
    protected $local;

    /**
     * @return mixed
     */
    public function getFields()
    {
        return $this->fields;
    }

    /**
     * @param mixed $fields
     */
    public function setFields($fields): void
    {
        $this->fields = $fields;
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
    public function getIncludeTypeName()
    {
        return $this->include_type_name;
    }

    /**
     * @param mixed $include_type_name
     */
    public function setIncludeTypeName($include_type_name): void
    {
        $this->include_type_name = $include_type_name;
    }

    /**
     * @return mixed
     */
    public function getIncludeDefaults()
    {
        return $this->include_defaults;
    }

    /**
     * @param mixed $include_defaults
     */
    public function setIncludeDefaults($include_defaults): void
    {
        $this->include_defaults = $include_defaults;
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
    public function getLocal()
    {
        return $this->local;
    }

    /**
     * @param mixed $local
     */
    public function setLocal($local): void
    {
        $this->local = $local;
    }
}