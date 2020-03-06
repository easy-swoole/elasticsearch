<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 11:59
 */

namespace EasySwoole\ElasticSearch\RequestBean\Cat;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Indices extends AbstractBean
{
    protected $index;
    protected $format;
    protected $bytes;
    protected $local;
    protected $master_timeout;
    protected $h;
    protected $health;
    protected $help;
    protected $pri;
    protected $s;
    protected $time;
    protected $v;
    protected $include_unloaded_segments;

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

    /**
     * @return mixed
     */
    public function getMasterTimeout()
    {
        return $this->master_timeout;
    }

    /**
     * @param mixed $master_timeout
     */
    public function setMasterTimeout($master_timeout): void
    {
        $this->master_timeout = $master_timeout;
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
    public function getHealth()
    {
        return $this->health;
    }

    /**
     * @param mixed $health
     */
    public function setHealth($health): void
    {
        $this->health = $health;
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
    public function getPri()
    {
        return $this->pri;
    }

    /**
     * @param mixed $pri
     */
    public function setPri($pri): void
    {
        $this->pri = $pri;
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

}