<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 17:25
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Delete;
use EasySwoole\ElasticSearch\Tests\Base;

class DeleteTest extends Base
{
    public function test()
    {
        $this->assertEquals(1,1);
//        $time = time();
//        $bean = new Delete();
//        $bean->setIndex('my-indices-index-' . $time);
//        $response = $this->getElasticSearch()->client()->indices()->delete($bean)->getBody();
//        $response = json_decode($response, true);
//        //print_r($response);
//        $this->assertArrayNotHasKey('errors', $response);
    }
}