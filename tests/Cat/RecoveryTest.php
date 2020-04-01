<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 11:51
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Recovery;
use EasySwoole\ElasticSearch\Tests\Base;

class RecoveryTest extends Base
{
    public function test()
    {
        $bean = new Recovery();
        $bean->setIndex('my-index');
        $bean->setFormat(true);
        $response = $this->getElasticSearch()->client()->cat()->recovery($bean)->getBody();
        //var_dump($response);
        $this->assertIsString($response);
    }
}