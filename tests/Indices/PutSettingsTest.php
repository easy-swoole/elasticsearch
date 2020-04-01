<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/24
 * Time: 13:57
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\PutSettings;
use EasySwoole\ElasticSearch\Tests\Base;

class PutSettingsTest extends Base
{
    public function test()
    {
        $bean = new PutSettings();
        $bean->setIndex('my-index');
        $bean->setBody([
            'settings' => [
                'index.refresh_interval' => '2s',
                //"index.blocks.write" => false
            ]
        ]);
        $response = $this->getElasticSearch()->client()->indices()->putSettings($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}