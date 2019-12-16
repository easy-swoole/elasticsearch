<?php


namespace EasySwoole\ElasticSearch\Tests;


class PingTest extends Base
{
    function test(){
        $result = $this->getElasticSearch()->client()->ping();
        $json = json_decode($result->getBody(),true);
        $this->assertIsArray($json);
    }
}