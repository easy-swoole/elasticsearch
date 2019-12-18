<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 18:10
 */

namespace EasySwoole\ElasticSearch\Namespaces;


use EasySwoole\ElasticSearch\Client;

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
}