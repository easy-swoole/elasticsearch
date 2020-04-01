<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 13:49
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Templates;
use EasySwoole\ElasticSearch\Tests\Base;

class TemplatesTest extends Base
{
    public function test()
    {
        $bean = new Templates();
        $bean->setHelp(true);
        $response = $this->getElasticSearch()->client()->cat()->templates($bean)->getBody();
        //var_dump($response);
        $this->assertIsString($response);
    }
}