<?php


namespace EasySwoole\ElasticSearch;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;
use EasySwoole\ElasticSearch\RequestBean\Get;
use EasySwoole\ElasticSearch\RequestBean\Index;
use EasySwoole\HttpClient\Bean\Response;

class Client
{

    private $elasticSearch;

    public function __construct(ElasticSearch $elasticSearch)
    {
        $this->elasticSearch = $elasticSearch;
    }

    /*
     * https://github.com/elastic/elasticsearch-php/blob/master/src/Elasticsearch/Client.php
     * 的职能
     */
    public function index(Index $bean): Response
    {
        /*
         * 构建请求
         */
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Index();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setId($bean->getId());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArray(null, ['index', 'type', 'id', 'body']));
        return $this->elasticSearch->request($endpoint);
    }

    public function get(Get $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Get();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setId($bean->getId());
        $endpoint->setParams($bean->toArray(null, ['index', 'type', 'id']));
        return $this->elasticSearch->request($endpoint);
    }


}