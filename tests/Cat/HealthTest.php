<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 10:56
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Health;
use EasySwoole\ElasticSearch\Tests\Base;

class HealthTest extends Base
{
    public function test()
    {
        $bean = new Health();
        $bean->setV(true);
        $response = $this->getElasticSearch()->client()->cat()->health($bean)->getBody();
        $this->assertIsString($response);
    }
}