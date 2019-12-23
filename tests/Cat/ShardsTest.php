<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 13:30
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Shards;
use EasySwoole\ElasticSearch\Tests\Base;

class ShardsTest extends Base
{
    public function test()
    {
        $bean = new Shards();
        $bean->setIndex('my-index');
        $response = $this->getElasticSearch()->client()->cat()->shards($bean)->getBody();
        //var_dump($response);
        $this->assertIsString($response);
    }
}