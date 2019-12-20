<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 18:10
 */

namespace EasySwoole\ElasticSearch\Namespaces;


use EasySwoole\ElasticSearch\Client;
use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;
use EasySwoole\HttpClient\Bean\Response;

abstract class AbstractNamespace
{
    private $client;

    public function __construct(Client $client)
    {
        $this->client = $client;
    }

    public function client(): Client
    {
        return $this->client;
    }

    protected function request(AbstractEndpoint $endpoint): Response
    {
        return $this->client()->request($endpoint);
    }
}