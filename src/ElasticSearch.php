<?php


namespace EasySwoole\ElasticSearch;


use EasySwoole\ElasticSearch\RequestBean\Index;

class ElasticSearch
{
    protected $config;

    function __construct(Config $config)
    {
        $this->config = $config;
    }

    /*
     * https://github.com/elastic/elasticsearch-php/blob/master/src/Elasticsearch/ClientBuilder.php
     * 的职能
     */
    function client():Client
    {
        return new Client();
    }

}