<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/16
 * Time: 17:17
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\Exists;

class ExistsTest extends Base
{
    public function test()
    {
        $bean = new Exists();
        $bean->setIndex('my-index');
        $bean->setId('my-id');

        $response = $this->getElasticSearch()->client()->exists($bean);
        $this->assertEquals(200, $response->getStatusCode());
    }
}