<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/16
 * Time: 17:03
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\Info;

class InfoTest extends Base
{
    public function test()
    {
        $bean=new Info();
        $response = $this->getElasticSearch()->client()->info($bean)->getBody();
        $response = json_decode($response,true);
        $this->assertIsArray($response);
    }
}