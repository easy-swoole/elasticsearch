<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/24
 * Time: 11:13
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Get;
use EasySwoole\ElasticSearch\Tests\Base;

class GetTest extends Base
{
    public function test()
    {
        $bean = new Get();
        $bean->setIndex('my-index');
        $bean->setLocal(true);
        $response = $this->getElasticSearch()->client()->indices()->get($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('errors', $response);
    }
}