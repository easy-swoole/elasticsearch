<?php


namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\Create;

class CreateTest extends Base
{
    function test()
    {
        $bean = new Create();
        $time = time();
        $bean->setIndex('my-index-'.$time);
        $bean->setType('my-type');
        $bean->setId('my-id-'.$time);
        $bean->setBody(['test-field' => $time]);
        $response = $this->getElasticSearch()->client()->create($bean)->getBody();
        $response = json_decode($response,true);
        $this->assertEquals('created',$response['result']);
    }
}