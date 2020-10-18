<?php


namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\Create;

class CreateTest extends Base
{
    function test()
    {
        $bean = new Create();
        $time = time();
        $bean->setIndex('my-index-' . $time);
        $bean->setType('my-type');
        $bean->setId('my-id-' . $time);
        $bean->setBody(['test-field' => 'abd']);
        $response = $this->getElasticSearch()->client()->create($bean)->getBody();
        $response = json_decode($response, true);
        var_dump('------------create', $response);
        $this->assertEquals('created', $response['result']);
    }
}