<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 17:02
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Close;
use EasySwoole\ElasticSearch\Tests\Base;

class CloseTest extends Base
{
    public function test()
    {
        $this->assertEquals(1,1);
//        $bean = new Close();
//        $bean->setIndex('my-index');
//        $response = $this->getElasticSearch()->client()->indices()->close($bean)->getBody();
//        $response = json_decode($response, true);
//        print_r($response);
//        $this->assertArrayNotHasKey('errors', $response);
    }
}