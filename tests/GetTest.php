<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/16
 * Time: 16:35
 */

namespace EasySwoole\ElasticSearch\Tests;


class GetTest extends Base
{
    public function test()
    {
        $bean = new \EasySwoole\ElasticSearch\RequestBean\Get();
        $bean->setIndex('my-index');
        $bean->setType('my-type');
        $bean->setId('my-id');
        $response = $this->getElasticSearch()->client()->get($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertIsArray($response);
    }
}