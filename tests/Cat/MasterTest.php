<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 11:28
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Master;
use EasySwoole\ElasticSearch\Tests\Base;

class MasterTest extends Base
{
    public function test()
    {
        $bean = new Master();
        $bean->setFormat(true);
        $bean->setLocal(true);
        $response = $this->getElasticSearch()->client()->cat()->master($bean)->getBody();
        //var_dump($response);
        $this->assertIsString($response);
    }
}