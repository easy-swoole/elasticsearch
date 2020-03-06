<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/26
 * Time: 9:12
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Stats;
use EasySwoole\ElasticSearch\Tests\Base;

class StatsTest extends Base
{
    public function test()
    {
        $bean = new Stats();
        $bean->setIndex('my-index');
        //$bean->setFields('test-field');
        $bean->setMetric(['merge', 'refresh']);
        $response = $this->getElasticSearch()->client()->indices()->stats($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}