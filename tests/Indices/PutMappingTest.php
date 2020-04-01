<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/24
 * Time: 13:43
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\PutMapping;
use EasySwoole\ElasticSearch\Tests\Base;

class PutMappingTest extends Base
{
    public function test()
    {
        $bean = new PutMapping();
        $bean->setIndex('my-index');
        $bean->setType('my-type');
        $bean->setIncludeTypeName(true);
        $bean->setBody([
            'properties' => [
                'email' => ['type' => 'text']
            ]
        ]);
        $response = $this->getElasticSearch()->client()->indices()->putMapping($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}