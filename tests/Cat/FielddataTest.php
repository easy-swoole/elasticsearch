<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 10:54
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Fielddata;
use EasySwoole\ElasticSearch\Tests\Base;

class FielddataTest extends Base
{
    public function test()
    {
        $bean = new Fielddata();
        $bean->setV(true);
        $response = $this->getElasticSearch()->client()->cat()->fielddata($bean)->getBody();
        $this->assertIsString($response);
    }
}