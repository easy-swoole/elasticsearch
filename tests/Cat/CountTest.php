<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 9:43
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Count;
use EasySwoole\ElasticSearch\Tests\Base;

class CountTest extends Base
{
    public function test()
    {
        $bean = new Count();
        $bean->setV(true);
        $response = $this->getElasticSearch()->client()->cat()->count($bean)->getBody();
        $this->assertIsString($response);
    }
}