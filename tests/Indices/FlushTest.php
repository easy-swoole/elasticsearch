<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/24
 * Time: 10:22
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Flush;
use EasySwoole\ElasticSearch\Tests\Base;

class FlushTest extends Base
{
    public function test()
    {
        $bean = new Flush();
        $bean->setIndex('my-index');
        $response = $this->getElasticSearch()->client()->indices()->flush($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('errors', $response);
    }
}