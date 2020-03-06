<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 11:56
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Repositories;
use EasySwoole\ElasticSearch\Tests\Base;

class RepositoriesTest extends Base
{
    public function test()
    {
        $bean = new Repositories();
//        $bean->setLocal(true);
//        $bean->setFormat(true);
        $bean->setHelp(true);
        $response = $this->getElasticSearch()->client()->cat()->repositories($bean)->getBody();
        //var_dump($response);
        $this->assertIsString($response);
    }
}