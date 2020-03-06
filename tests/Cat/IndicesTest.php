<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 11:11
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Indices;
use EasySwoole\ElasticSearch\Tests\Base;

class IndicesTest extends Base
{
    public function test()
    {
        $bean = new Indices();
        $bean->setIndex('my-index');
        //$bean->setHelp(true);
        $response = $this->getElasticSearch()->client()->cat()->indices($bean)->getBody();
        $this->assertIsString($response);
    }
}