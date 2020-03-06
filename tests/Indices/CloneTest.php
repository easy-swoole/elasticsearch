<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 14:40
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\CloneIndices;
use EasySwoole\ElasticSearch\RequestBean\Indices\PutSettings;
use EasySwoole\ElasticSearch\Tests\Base;

class CloneTest extends Base
{
    public function test()
    {
        $this->assertEquals(1,1);
//        $bean=new PutSettings();
//        $bean->setIndex('my-index');
//        $bean->setBody([
//            'settings' => [
//                'index.blocks.write' => false
//            ]
//        ]);
//        $response = $this->getElasticSearch()->client()->indices()->putSettings($bean)->getBody();
//        $response = json_decode($response, true);
//        print_r($response);

//        $bean = new CloneIndices();
//        $bean->setIndex('my-index');
//        $bean->setTarget('my-target-index');
//        $bean->setBody([
//            'settings' => [
//                'index.number_of_shards' => 1
//            ]
//        ]);
//        $response = $this->getElasticSearch()->client()->indices()->clone($bean)->getBody();
//        $response = json_decode($response, true);
//        $this->assertArrayNotHasKey('errors', $response);
    }
}