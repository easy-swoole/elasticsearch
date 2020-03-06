<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/26
 * Time: 10:18
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Upgrade;
use EasySwoole\ElasticSearch\Tests\Base;

class UpgradeTest extends Base
{
    public function test()
    {
        $bean = new Upgrade();
        $bean->setIndex('my-index');
        $response = $this->getElasticSearch()->client()->indices()->upgrade($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}