<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 10:58
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Help;
use EasySwoole\ElasticSearch\Tests\Base;

class HelpTest extends Base
{
    public function test()
    {
        $bean = new Help();
        $response = $this->getElasticSearch()->client()->cat()->help($bean)->getBody();
        $this->assertIsString($response);
    }
}