<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 14:16
 */

namespace EasySwoole\ElasticSearch\RequestBean\Cat;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Recovery extends AbstractBean
{
    protected $index;
    protected $format;
    protected $active_only;
    protected $bytes;
    protected $detailed;
    protected $h;
    protected $help;
    protected $s;
    protected $time;
    protected $v;

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
    public function getFormat()
    {
        return $this->format;
    }

    /**
     * @param mixed $format
     */
    public function setFormat($format): void
    {
        $this->format = $format;
    }

    /**
     * @return mixed
     */
    public function getActiveOnly()
    {
        return $this->active_only;
    }

    /**
     * @param mixed $active_only
     */
    public function setActiveOnly($active_only): void
    {
        $this->active_only = $active_only;
    }

    /**
     * @return mixed
     */
    public function getBytes()
    {
        return $this->bytes;
    }

    /**
     * @param mixed $bytes
     */
    public function setBytes($bytes): void
    {
        $this->bytes = $bytes;
    }

    /**
     * @return mixed
     */
    public function getDetailed()
    {
        return $this->detailed;
    }

    /**
     * @param mixed $detailed
     */
    public function setDetailed($detailed): void
    {
        $this->detailed = $detailed;
    }

    /**
     * @return mixed
     */
    public function getH()
    {
        return $this->h;
    }

    /**
     * @param mixed $h
     */
    public function setH($h): void
    {
        $this->h = $h;
    }

    /**
     * @return mixed
     */
    public function getHelp()
    {
        return $this->help;
    }

    /**
     * @param mixed $help
     */
    public function setHelp($help): void
    {
        $this->help = $help;
    }

    /**
     * @return mixed
     */
    public function getS()
    {
        return $this->s;
    }

    /**
     * @param mixed $s
     */
    public function setS($s): void
    {
        $this->s = $s;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time): void
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getV()
    {
        return $this->v;
    }

    /**
     * @param mixed $v
     */
    public function setV($v): void
    {
        $this->v = $v;
    }
}