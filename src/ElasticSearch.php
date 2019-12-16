<?php


namespace EasySwoole\ElasticSearch;


class ElasticSearch
{
    protected $config;

    function __construct(Config $config)
    {
        $this->config = $config;
    }


    public function getConfig(): Config
    {
        return $this->config;
    }

    /*
     * https://github.com/elastic/elasticsearch-php/blob/master/src/Elasticsearch/ClientBuilder.php
     * 的职能
     */
    public function client(): Client
    {
        return new Client($this->config);
    }

}