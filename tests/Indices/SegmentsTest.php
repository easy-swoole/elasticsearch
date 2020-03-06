<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/25
 * Time: 15:07
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Segments;
use EasySwoole\ElasticSearch\Tests\Base;

class SegmentsTest extends Base
{
    public function test()
    {
        $bean = new Segments();
        $bean->setIndex('my-index');
        $response = $this->getElasticSearch()->client()->indices()->segments($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}