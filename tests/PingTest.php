<?php


namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\Ping;

class PingTest extends Base
{
    function test()
    {
        $bean = new Ping();
        $result = $this->getElasticSearch()->client()->ping($bean);
        $this->assertEquals(200, $result->getStatusCode());
    }
}