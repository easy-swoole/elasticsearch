<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/13
 * Time: 10:18
 */

namespace EasySwoole\ElasticSearch\RequestBean;


class TermVectors extends AbstractBean
{

    protected $index;
    protected $id;
    protected $type;
    protected $term_statistics;
    protected $field_statistics;
    protected $fields;
    protected $offsets;
    protected $positions;
    protected $payloads;
    protected $preference;
    protected $routing;
    protected $realtime;
    protected $version;
    protected $version_type;
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
    public function getTermStatistics()
    {
        return $this->term_statistics;
    }

    /**
     * @param mixed $term_statistics
     */
    public function setTermStatistics($term_statistics): void
    {
        $this->term_statistics = $term_statistics;
    }

    /**
     * @return mixed
     */
    public function getFieldStatistics()
    {
        return $this->field_statistics;
    }

    /**
     * @param mixed $field_statistics
     */
    public function setFieldStatistics($field_statistics): void
    {
        $this->field_statistics = $field_statistics;
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
    public function getOffsets()
    {
        return $this->offsets;
    }

    /**
     * @param mixed $offsets
     */
    public function setOffsets($offsets): void
    {
        $this->offsets = $offsets;
    }

    /**
     * @return mixed
     */
    public function getPositions()
    {
        return $this->positions;
    }

    /**
     * @param mixed $positions
     */
    public function setPositions($positions): void
    {
        $this->positions = $positions;
    }

    /**
     * @return mixed
     */
    public function getPayloads()
    {
        return $this->payloads;
    }

    /**
     * @param mixed $payloads
     */
    public function setPayloads($payloads): void
    {
        $this->payloads = $payloads;
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
    public function getRealtime()
    {
        return $this->realtime;
    }

    /**
     * @param mixed $realtime
     */
    public function setRealtime($realtime): void
    {
        $this->realtime = $realtime;
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
    public function getVersionType()
    {
        return $this->version_type;
    }

    /**
     * @param mixed $version_type
     */
    public function setVersionType($version_type): void
    {
        $this->version_type = $version_type;
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