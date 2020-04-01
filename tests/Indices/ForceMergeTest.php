<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/24
 * Time: 11:09
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Forcemerge;
use EasySwoole\ElasticSearch\Tests\Base;

class ForceMergeTest extends Base
{
    public function test()
    {
        $bean = new Forcemerge();
        $bean->setIndex('my-index');
        $response = $this->getElasticSearch()->client()->indices()->forcemerge($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('errors', $response);
    }
}