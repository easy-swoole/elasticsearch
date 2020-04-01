<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/25
 * Time: 14:53
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Refresh;
use EasySwoole\ElasticSearch\Tests\Base;

class RefreshTest extends Base
{
    public function test()
    {
        $bean = new Refresh();
        $bean->setIndex('my-index');
        $response = $this->getElasticSearch()->client()->indices()->refresh($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}