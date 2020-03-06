<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 15:08
 */

namespace EasySwoole\ElasticSearch\RequestBean\Ingest;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Simulate extends AbstractBean
{
    protected $id;
    protected $verbose;
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
    public function getVerbose()
    {
        return $this->verbose;
    }

    /**
     * @param mixed $verbose
     */
    public function setVerbose($verbose): void
    {
        $this->verbose = $verbose;
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