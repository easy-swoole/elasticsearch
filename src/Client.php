<?php


namespace EasySwoole\ElasticSearch;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;
use EasySwoole\ElasticSearch\RequestBean\Index;
use EasySwoole\HttpClient\Bean\Response;
use EasySwoole\HttpClient\HttpClient;

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
    function index(Index $index): Response
    {
        /*
         * 构建请求
         */
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Index($index);
        return $this->request($endpoint);
    }

    protected function request(AbstractEndpoint $endpoint)
    {
        /*
         * 发起请求
         */
        $url = 'http://' . $this->elasticSearch->getConfig()->getHost() . ':' . $this->elasticSearch->getConfig()->getPort() . $endpoint->getUri();
        $httpClient = new HttpClient($url);
        return $httpClient->post($endpoint->getBody(), ['Content-Type' => 'application/json']);
    }

    protected function getUri()
    {
        return $this->uri;
    }

}