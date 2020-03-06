<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/25
 * Time: 16:17
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\ShardStores;
use EasySwoole\ElasticSearch\Tests\Base;

class ShardStoresTest extends Base
{
    public function test()
    {
        $bean = new ShardStores();
        $bean->setIndex('my-index');
        $response = $this->getElasticSearch()->client()->indices()->shardStores($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}