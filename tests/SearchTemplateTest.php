<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/17
 * Time: 14:36
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\SearchTemplate;

class SearchTemplateTest extends Base
{
    public function test()
    {
        $bean = new SearchTemplate();
        $bean->setIndex('my-index');
        $bean->setType('my-type');
        $bean->setBody([
            'inline' =>
                [
                    'query' =>
                        [
                            'match' => ["{{field}}" => "{{value}}"]
//                            'match' => ['{{#toJson}}field{{/toJson}}' => '{{#toJson}}value{{/toJson}}']
                        ]
                ],
            'params' =>
                [
                    'field' => 'test-field',
                    'value' => '博客'
                ]
        ]);
        $response = $this->getElasticSearch()->client()->searchTemplate($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertIsArray($response);
        $this->assertArrayHasKey('_shards', $response);
    }
}