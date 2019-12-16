<?php


namespace EasySwoole\ElasticSearch;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;
use EasySwoole\HttpClient\Bean\Response;
use EasySwoole\HttpClient\HttpClient;

class ElasticSearch
{
    protected $config;
    protected $headers;

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


    public function request(AbstractEndpoint $endpoint): Response
    {
        $params = [];
        $url = 'http://' . $this->getConfig()->getHost() . ':' . $this->getConfig()->getPort() . $endpoint->getUri();

        empty($endpoint->getCustom()) || $params = $endpoint->getCustom();
        empty($endpoint->getParams()) || $params = array_merge($params, $endpoint->getParams());

        empty($params) || $url .= '?' . http_build_query($endpoint->getParams());

        $headers = ['Content-Type' => HttpClient::CONTENT_TYPE_APPLICATION_JSON];
        empty($this->headers) || $headers = array_merge($headers, $this->headers);

        $httpClient = new HttpClient($url);
        switch ($endpoint->getMethod()) {
            case HttpClient::METHOD_POST:
                $response = $httpClient->post($endpoint->getBody(), $headers);
                break;
            case HttpClient::METHOD_PUT:
                $response = $httpClient->put($endpoint->getBody(), $headers);
                break;
            case HttpClient::METHOD_DELETE:
                $response = $httpClient->delete($headers);
                break;
            case HttpClient::METHOD_HEAD:
                $response = $httpClient->head($headers);
                break;
            default:
                $response = $httpClient->get($headers);
        }
        return $response;
    }

}