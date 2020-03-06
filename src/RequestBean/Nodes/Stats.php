<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 15:46
 */

namespace EasySwoole\ElasticSearch\RequestBean\Nodes;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Stats extends AbstractBean
{
    protected $node_id;
    protected $metric;
    protected $index_metric;
    protected $completion_fields;
    protected $fielddata_fields;
    protected $fields;
    protected $groups;
    protected $level;
    protected $types;
    protected $timeout;
    protected $include_segment_file_sizes;

    /**
     * @return mixed
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * @param mixed $node_id
     */
    public function setNodeId($node_id): void
    {
        $this->node_id = $node_id;
    }

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
    public function getIndexMetric()
    {
        return $this->index_metric;
    }

    /**
     * @param mixed $index_metric
     */
    public function setIndexMetric($index_metric): void
    {
        $this->index_metric = $index_metric;
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

}