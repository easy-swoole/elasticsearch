<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 11:47
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Plugins;
use EasySwoole\ElasticSearch\Tests\Base;

class PluginsTest extends Base
{
    public function test()
    {
        $bean = new Plugins();
//        $bean->setLocal(true);
//        $bean->setFormat(true);
        $bean->setHelp(true);
        $response = $this->getElasticSearch()->client()->cat()->plugins($bean)->getBody();
//        var_dump($response);
        $this->assertIsString($response);
    }
}