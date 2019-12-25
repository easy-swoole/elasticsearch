<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/24
 * Time: 14:07
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\PutTemplate;
use EasySwoole\ElasticSearch\Tests\Base;

class PutTemplateTest extends Base
{
    public function test()
    {
        $bean = new PutTemplate();
        $bean->setName('my-template');
        $bean->setIncludeTypeName(true);
        $bean->setBody([
            'template' => 'my-test-template',
            'order' => 0,
            'mappings' => [
                '_doc' => [
                    '_source' => ['enabled' => false],
                    'properties' => [
                        '@timestamp' => [
                            'type' => 'date',
                            "format" => "yyyy-MM-dd HH:mm:ss"
                        ]
                    ]
                ]
            ]
        ]);
        $response = $this->getElasticSearch()->client()->indices()->putTemplate($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}