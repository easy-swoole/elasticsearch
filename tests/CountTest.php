<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/16
 * Time: 16:37
 */

namespace EasySwoole\ElasticSearch\Tests;


class CountTest extends Base
{
    public function test()
    {
        $bean = new \EasySwoole\ElasticSearch\RequestBean\Count();
        $response = $this->getElasticSearch()->client()->count($bean)->getBody();
        $response = json_decode($response, true);
        print_r($response);
        $this->assertArrayHasKey('count', $response);
    }
}