<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/25
 * Time: 14:34
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Recovery;
use EasySwoole\ElasticSearch\Tests\Base;

class RecoveryTest extends Base
{
    public function test()
    {
        $bean = new Recovery();
        $bean->setIndex('my-index');
        $response = $this->getElasticSearch()->client()->indices()->recovery($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}