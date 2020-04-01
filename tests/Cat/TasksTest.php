<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 13:44
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Tasks;
use EasySwoole\ElasticSearch\Tests\Base;

class TasksTest extends Base
{
    public function test(){
        $bean = new Tasks();
        $bean->setHelp(true);
        $response = $this->getElasticSearch()->client()->cat()->tasks($bean)->getBody();
        //var_dump($response);
        $this->assertIsString($response);
    }
}