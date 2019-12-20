<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 14:07
 */

namespace EasySwoole\ElasticSearch\RequestBean\Cat;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Nodes extends AbstractBean
{
    protected $bytes;
    protected $format;
    protected $full_id;
    protected $local;
    protected $master_timeout;
    protected $h;
    protected $help;
    protected $s;
    protected $time;
    protected $v;

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
    public function getFullId()
    {
        return $this->full_id;
    }

    /**
     * @param mixed $full_id
     */
    public function setFullId($full_id): void
    {
        $this->full_id = $full_id;
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