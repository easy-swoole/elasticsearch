<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/17
 * Time: 9:20
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\Index;

class IndexTest extends Base
{
    public function test()
    {
        $time = time();
        $bean = new Index();
        $bean->setIndex('my-index');
        $bean->setType('my-type');
        $bean->setId('my-id-' . $time);
        $bean->setBody(['test-field' => '测试' . $time]);
        $response = $this->getElasticSearch()->client()->index($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertEquals('created', $response['result']);
    }
}