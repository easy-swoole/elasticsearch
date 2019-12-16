<?php


namespace EasySwoole\ElasticSearch\Tests;


class PingTest extends Base
{
    function test(){
        $result = $this->getElasticSearch()->client()->ping();
        $this->assertEquals(200,$result->getStatusCode());
    }
}