<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/17
 * Time: 16:11
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\Update;
//参考文档
//https://www.elastic.co/guide/cn/elasticsearch/guide/current/partial-updates.html
class UpdateTest extends Base
{
    public function test()
    {
        $bean = new Update();
        $bean->setIndex('my-index');
        $bean->setType('my-type');
        $bean->setId('my-id');
        $bean->setBody([
            'doc' => [
                'test-field' => 'abd'
            ]
        ]);
        $response = $this->getElasticSearch()->client()->update($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertIsArray($response);
        $this->assertArrayHasKey('_shards', $response);
    }
}