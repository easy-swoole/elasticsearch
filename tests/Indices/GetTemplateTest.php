<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/24
 * Time: 12:03
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\GetTemplate;
use EasySwoole\ElasticSearch\Tests\Base;

class GetTemplateTest extends Base
{
    public function test()
    {
        $bean = new GetTemplate();
        $bean->setName('asdasd');
        $response = $this->getElasticSearch()->client()->indices()->getTemplate($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}