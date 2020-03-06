<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/26
 * Time: 9:04
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Split;
use EasySwoole\ElasticSearch\Tests\Base;

class SplitTest extends Base
{
    public function test()
    {
        $bean = new Split();
        $bean->setIndex('my-index');
        $bean->setTarget('my-target-index-1');
        $bean->setBody([
            "settings" => [
                "index.number_of_shards" => 3
            ]
        ]);
        $response = $this->getElasticSearch()->client()->indices()->split($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}