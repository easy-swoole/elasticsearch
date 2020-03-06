<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 9:33
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Allocation;
use EasySwoole\ElasticSearch\Tests\Base;

class AllocationTest extends Base
{
    public function test()
    {
        $bean = new Allocation();
        $bean->setV(true);
        $response = $this->getElasticSearch()->client()->cat()->allocation($bean)->getBody();
        $this->assertIsString($response);
    }
}