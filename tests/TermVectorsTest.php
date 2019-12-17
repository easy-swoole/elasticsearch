<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/17
 * Time: 14:42
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\TermVectors;

//参考文档
//https://www.cnblogs.com/xing901022/p/5348737.html
class TermVectorsTest extends Base
{
    public function test()
    {
        $bean = new TermVectors();
        $bean->setIndex('my-index');
        $bean->setType('my-type');
        $bean->setId('my-id');
        $bean->setPretty(true);
        $bean->setBody([
            'fields' => ['test-field'],
            'offsets' => true,
            'payloads' => true,
            'positions' => true,
            "term_statistics" => true,
            "field_statistics" => true
        ]);
        $response = $this->getElasticSearch()->client()->termvectors($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertIsArray($response);
        $this->assertArrayHasKey('found', $response);
        $this->assertEquals(true, $response['found']);
    }
}