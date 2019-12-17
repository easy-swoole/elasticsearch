<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/17
 * Time: 14:24
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\Search;

class SearchTest extends Base
{
    public function test()
    {
        $bean = new Search();
        $bean->setIndex('my-index');
        $bean->setType('my-type');
        $bean->setBody(['query' => ['match' => ['test-field' => 'ab']]]);
        $response = $this->getElasticSearch()->client()->search($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertIsArray($response);
        $this->assertArrayHasKey('_shards', $response);
    }
}