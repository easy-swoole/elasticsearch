<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 17:34
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Exists;
use EasySwoole\ElasticSearch\Tests\Base;

class ExistsTest extends Base
{
    public function test()
    {
        $bean = new Exists();
        $bean->setIndex('my-index');
        $bean->setLocal(true);
        $response = $this->getElasticSearch()->client()->indices()->exists($bean);
        $this->assertEquals(200, $response->getStatusCode());
    }
}