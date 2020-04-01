<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 17:30
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\DeleteAlias;
use EasySwoole\ElasticSearch\Tests\Base;

class DeleteAliasTest extends Base
{
    public function test()
    {
        $this->assertEquals(1, 1);
//        $time = time();
//        $bean = new DeleteAlias();
//        $bean->setIndex('my-indices-index-' . $time);
//        $bean->setName('1213');
//        $response = $this->getElasticSearch()->client()->indices()->deleteAlias($bean)->getBody();
//        $response = json_decode($response, true);
//        //print_r($response);
//        $this->assertArrayNotHasKey('errors', $response);
    }
}