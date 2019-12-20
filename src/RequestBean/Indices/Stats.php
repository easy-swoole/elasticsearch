<?php
/**
 * Created by PhpStorm.
 * User: mayn
 * Date: 2019/12/18
 * Time: 23:24
 */

namespace EasySwoole\ElasticSearch\RequestBean\Indices;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Stats extends AbstractBean
{
    protected $metric;
    protected $index;
    protected $completion_fields;
    protected $fielddata_fields;
    protected $fields;
    protected $groups;
    protected $level;
    protected $types;
    protected $include_segment_file_sizes;
    protected $include_unloaded_segments;
    protected $expand_wildcards;
    protected $forbid_closed_indices;

    /**
     * @return mixed
     */
    public function getMetric()
    {
        return $this->metric;
    }

    /**
     * @param mixed $metric
     */
    public function setMetric($metric): void
    {
        $this->metric = $metric;
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
    public function getCompletionFields()
    {
        return $this->completion_fields;
    }

    /**
     * @param mixed $completion_fields
     */
    public function setCompletionFields($completion_fields): void
    {
        $this->completion_fields = $completion_fields;
    }

    /**
     * @return mixed
     */
    public function getFielddataFields()
    {
        return $this->fielddata_fields;
    }

    /**
     * @param mixed $fielddata_fields
     */
    public function setFielddataFields($fielddata_fields): void
    {
        $this->fielddata_fields = $fielddata_fields;
    }

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
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * @param mixed $groups
     */
    public function setGroups($groups): void
    {
        $this->groups = $groups;
    }

    /**
     * @return mixed
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * @param mixed $level
     */
    public function setLevel($level): void
    {
        $this->level = $level;
    }

    /**
     * @return mixed
     */
    public function getTypes()
    {
        return $this->types;
    }

    /**
     * @param mixed $types
     */
    public function setTypes($types): void
    {
        $this->types = $types;
    }

    /**
     * @return mixed
     */
    public function getIncludeSegmentFileSizes()
    {
        return $this->include_segment_file_sizes;
    }

    /**
     * @param mixed $include_segment_file_sizes
     */
    public function setIncludeSegmentFileSizes($include_segment_file_sizes): void
    {
        $this->include_segment_file_sizes = $include_segment_file_sizes;
    }

    /**
     * @return mixed
     */
    public function getIncludeUnloadedSegments()
    {
        return $this->include_unloaded_segments;
    }

    /**
     * @param mixed $include_unloaded_segments
     */
    public function setIncludeUnloadedSegments($include_unloaded_segments): void
    {
        $this->include_unloaded_segments = $include_unloaded_segments;
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
    public function getForbidClosedIndices()
    {
        return $this->forbid_closed_indices;
    }

    /**
     * @param mixed $forbid_closed_indices
     */
    public function setForbidClosedIndices($forbid_closed_indices): void
    {
        $this->forbid_closed_indices = $forbid_closed_indices;
    }

}