<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 12:02
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Segments;
use EasySwoole\ElasticSearch\Tests\Base;

class SegmentsTest extends Base
{
    public function test()
    {
        $bean = new Segments();
        $bean->setIndex('my-index');
        $bean->setFormat(true);
        //$bean->setHelp(true);
        $response = $this->getElasticSearch()->client()->cat()->segments($bean)->getBody();
        //var_dump($response);
        $this->assertIsString($response);
    }
}