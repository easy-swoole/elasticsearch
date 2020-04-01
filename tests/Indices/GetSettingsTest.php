<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/24
 * Time: 11:57
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\GetSettings;
use EasySwoole\ElasticSearch\Tests\Base;

class GetSettingsTest extends Base
{
    public function test()
    {
        $bean = new GetSettings();
        $bean->setIndex('my-index');
        $bean->setLocal(true);
        $response = $this->getElasticSearch()->client()->indices()->getSettings($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}