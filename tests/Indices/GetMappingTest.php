<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/24
 * Time: 11:50
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\GetMapping;
use EasySwoole\ElasticSearch\Tests\Base;

class GetMappingTest extends Base
{
    public function test()
    {
        $bean = new GetMapping();
        $bean->setIndex('my-index');
        //$bean->setType('my-type');
        $bean->setLocal(true);
        $response = $this->getElasticSearch()->client()->indices()->getMapping($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}