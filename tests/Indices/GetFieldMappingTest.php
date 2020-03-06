<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/24
 * Time: 11:37
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\GetFieldMapping;
use EasySwoole\ElasticSearch\Tests\Base;

class GetFieldMappingTest extends Base
{
    public function test(){
        $bean = new GetFieldMapping();
        $bean->setIndex('my-index');
        $bean->setFields('test-field');
        $bean->setLocal(true);
        $response = $this->getElasticSearch()->client()->indices()->getFieldMapping($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}