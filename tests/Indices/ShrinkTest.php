<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/25
 * Time: 17:07
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Shrink;
use EasySwoole\ElasticSearch\Tests\Base;

class ShrinkTest extends Base
{
    public function test()
    {
        $bean = new Shrink();
        $bean->setIndex('my-index');
        $bean->setTarget('my_target_index');
        $bean->setBody([
            'settings' => [
                'index.number_of_replicas' => 1,
                'index.number_of_shards' => 1,
                'index.codec' => 'best_compression'
            ]
        ]);
        $response = $this->getElasticSearch()->client()->indices()->shrink($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}