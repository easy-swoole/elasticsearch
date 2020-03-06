<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 11:33
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\NodeAttrs;
use EasySwoole\ElasticSearch\Tests\Base;

class NodeAttrsTest extends Base
{
    public function test()
    {
        $bean = new NodeAttrs();
        $bean->setFormat(true);
        $bean->setLocal(true);
        $response = $this->getElasticSearch()->client()->cat()->nodeattrs($bean)->getBody();
        //var_dump($response);
        $this->assertIsString($response);
    }
}