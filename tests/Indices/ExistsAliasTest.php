<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 17:58
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\ExistsAlias;
use EasySwoole\ElasticSearch\Tests\Base;

class ExistsAliasTest extends Base
{
    public function test()
    {
        //$this->assertEquals(1,1);
        $bean = new ExistsAlias();
        $bean->setIndex('my-index');
        $bean->setLocal(true);
        $bean->setName('my-index-alias');
        $response = $this->getElasticSearch()->client()->indices()->existsAlias($bean);
        $this->assertEquals(200, $response->getStatusCode());
    }
}