<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/24
 * Time: 10:59
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\FlushSynced;
use EasySwoole\ElasticSearch\Tests\Base;

class FlushSyncedTest extends Base
{
    public function test()
    {
        $bean = new FlushSynced();
        $bean->setIndex('my-index');
        $response = $this->getElasticSearch()->client()->indices()->flushSynced($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('errors', $response);
    }
}