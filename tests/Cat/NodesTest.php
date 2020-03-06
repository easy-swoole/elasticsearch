<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 11:38
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Nodes;
use EasySwoole\ElasticSearch\Tests\Base;

class NodesTest extends Base
{
    public function test()
    {
        $bean = new Nodes();
        $bean->setFormat(true);
        $bean->setLocal(true);
        $response = $this->getElasticSearch()->client()->cat()->nodes($bean)->getBody();
        $this->assertIsString($response);
    }
}