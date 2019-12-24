<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/24
 * Time: 13:41
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\GetUpgrade;
use EasySwoole\ElasticSearch\Tests\Base;

class GetUpgradeTest extends Base
{
    public function test()
    {
        $bean = new GetUpgrade();
        $bean->setIndex('my-index');
        $response = $this->getElasticSearch()->client()->indices()->getUpgrade($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}