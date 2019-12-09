<?php


namespace EasySwoole\ElasticSearch;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;
use EasySwoole\HttpClient\Bean\Response;
use EasySwoole\HttpClient\HttpClient;

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
        return new Client($this);
    }


    public function getHttpClient()
    {

    }

    public function request(AbstractEndpoint $endpoint): Response
    {
        /*
         * 发起请求
         */
        $url = 'http://' . $this->getConfig()->getHost() . ':' . $this->getConfig()->getPort() . $endpoint->getUri();
        if ($endpoint->getParams()) {
            $url .= '?' . http_build_query($endpoint->getParams());
        }
        $httpClient = new HttpClient($url);
        if ($endpoint->getMethod() == HttpClient::METHOD_POST) {
            return $httpClient->postJson(json_encode($endpoint->getBody()));
        }
        return $httpClient->get(['Content-Type' => HttpClient::CONTENT_TYPE_APPLICATION_JSON]);
    }

}