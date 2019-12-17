<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/17
 * Time: 14:29
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\SearchShards;

class SearchShardsTest extends Base
{
    public function test()
    {
        $bean = new SearchShards();
        $bean->setIndex('my-index');
        $response = $this->getElasticSearch()->client()->searchShards($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertIsArray($response);
        $this->assertArrayHasKey('nodes', $response);
        //$this->assertArrayHasKey('took', $response);
    }
}