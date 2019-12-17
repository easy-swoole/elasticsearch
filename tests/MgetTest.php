<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/17
 * Time: 9:29
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\Mget;

class MgetTest extends Base
{
    public function test()
    {
        $bean = new Mget();
        $bean->setIndex('my-index');
        $bean->setType('my-type');
        $bean->setBody(['ids' => ['my-id', '1']]);
        $response = $this->getElasticSearch()->client()->mget($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertArrayHasKey('docs', $response);
    }
}