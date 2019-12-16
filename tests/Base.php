<?php


namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\Config;
use EasySwoole\ElasticSearch\ElasticSearch;
use PHPUnit\Framework\TestCase;

class Base extends TestCase
{
    private $elasticSearch;

    function getElasticSearch():ElasticSearch
    {
        if(empty($this->elasticSearch)){
            $this->elasticSearch = new ElasticSearch(new Config(
                [
                    'host'=>ELASTICSEARCH_HOST,
                    'port'=>ELASTICSEARCH_PORT
                ]
            ));
        }
        return $this->elasticSearch;
    }
}