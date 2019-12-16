<?php


namespace EasySwoole\ElasticSearch;


use EasySwoole\Spl\SplBean;

class Config extends SplBean
{
    protected $host = '127.0.0.1';
    protected $port = 9200;

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host): void
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port): void
    {
        $this->port = $port;
    }


}