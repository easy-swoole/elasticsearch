<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/26
 * Time: 9:04
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Create;
use EasySwoole\ElasticSearch\RequestBean\Indices\Delete;
use EasySwoole\ElasticSearch\RequestBean\Indices\Split;
use EasySwoole\ElasticSearch\Tests\Base;

class SplitTest extends Base
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
                "index.number_of_shards" => 1,
//                "index.number_of_replicas" => 1,
//                "index.routing.allocation.require._name" => "shrink_node_name",
                "index.blocks.write" => true
            ]]);
        $response = $this->getElasticSearch()->client()->indices()->create($bean)->getBody();
        var_dump($response);
        $this->assertArrayNotHasKey('error', json_decode($response, true));

        $bean = new Split();
        $bean->setIndex('my_source_index');
        $bean->setTarget('my-target-index-' . time());
        $bean->setBody([
            "settings" => [
                "index.number_of_shards" => 2,
//                "index.blocks.write" => true
            ]
        ]);


        $response = $this->getElasticSearch()->client()->indices()->split($bean)->getBody();
        $response = json_decode($response, true);
        var_dump('--------------split');
        var_dump($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}