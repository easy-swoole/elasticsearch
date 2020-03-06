<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 18:15
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Create;
use EasySwoole\ElasticSearch\Tests\Base;

class CreateTest extends Base
{
    public function test()
    {
        $bean = new Create();
        $time = time();
        $bean->setIndex('my-indices-index-' . $time);
        $bean->setBody([
            'settings' => [
                'index' => [
                    'number_of_shards' => 5,
                    'number_of_replicas' => 6
                ]
            ]
        ]);
        $response = $this->getElasticSearch()->client()->indices()->create($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('errors', $response);
    }
}