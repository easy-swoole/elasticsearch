<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 11:43
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\PendingTasks;
use EasySwoole\ElasticSearch\Tests\Base;

class PendingTasksTest extends Base
{
    public function test()
    {
        $bean = new PendingTasks();
//        $bean->setLocal(true);
//        $bean->setFormat(true);
        $bean->setHelp(true);
        $response = $this->getElasticSearch()->client()->cat()->pendingTasks($bean)->getBody();
        //var_dump($response);
        $this->assertIsString($response);
    }
}