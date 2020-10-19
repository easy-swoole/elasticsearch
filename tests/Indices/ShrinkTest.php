<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/25
 * Time: 17:07
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Delete;
use EasySwoole\ElasticSearch\RequestBean\Indices\Create;
use EasySwoole\ElasticSearch\RequestBean\Indices\Shrink;
use EasySwoole\ElasticSearch\Tests\Base;

class ShrinkTest extends Base
{
    public function test()
    {

        $bean = new Delete();
        $bean->setIndex('my_source_index');
        $this->getElasticSearch()->client()->indices()->delete($bean)->getBody();

        $bean = new Create();
        $bean->setIndex('my_source_index');
        $bean->setBody([
            'settings' => [
                "index.number_of_shards" => 2,
//                "index.number_of_replicas" => 1,
//                "index.routing.allocation.require._name" => "shrink_node_name",
                "index.blocks.write" => true
            ]]);
        $response = $this->getElasticSearch()->client()->indices()->create($bean)->getBody();
        var_dump($response);
        $this->assertArrayNotHasKey('error', json_decode($response, true));

        $bean = new Shrink();
        $bean->setIndex('my_source_index');
        $bean->setTarget('my_target_index' . time());
        $bean->setBody([
            'settings' => [
                "index.number_of_replicas" => 1,
                "index.number_of_shards" => 2,
                "index.codec" => "best_compression"
            ]
        ]);
        $response = $this->getElasticSearch()->client()->indices()->shrink($bean)->getBody();
        $response = json_decode($response, true);
        var_dump('------------------shrink test');
        var_dump($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}