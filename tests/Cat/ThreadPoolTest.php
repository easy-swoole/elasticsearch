<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 13:58
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\ThreadPool;
use EasySwoole\ElasticSearch\Tests\Base;

class ThreadPoolTest extends Base
{
    public function test()
    {
        $bean = new ThreadPool();
        $bean->setHelp(true);
        $response = $this->getElasticSearch()->client()->cat()->threadPool($bean)->getBody();
        //var_dump($response);
        $this->assertIsString($response);
    }
}