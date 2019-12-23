<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 14:01
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\ClearCache;
use EasySwoole\ElasticSearch\Tests\Base;

class ClearCacheTest extends Base
{
    public function test()
    {
        $bean = new ClearCache();
        $bean->setIndex('my-index');
        $response = $this->getElasticSearch()->client()->indices()->clearCache($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertIsArray($response);
        $this->assertArrayNotHasKey('errors', $response);
    }
}