<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/17
 * Time: 9:15
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\GetSource;

class GetSourceTest extends Base
{
    public function test()
    {
        $bean = new GetSource();
        $bean->setIndex('my-index');
        $bean->setId('my-id');
        $response = $this->getElasticSearch()->client()->getSource($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertEquals('abd', $response['test-field']);
    }
}