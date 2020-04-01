<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/20
 * Time: 9:07
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Aliases;
use EasySwoole\ElasticSearch\Tests\Base;

class AliasesTest extends Base
{
    public function test()
    {
        $bean = new Aliases();
        $bean->setHelp(true);
        //$bean->setV(true);
        $response = $this->getElasticSearch()->client()->cat()->aliases($bean)->getBody();
        $this->assertIsString($response);
    }
}