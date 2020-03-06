<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/24
 * Time: 10:10
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\ExistsType;
use EasySwoole\ElasticSearch\Tests\Base;

class ExistsTypeTest extends Base
{
    public function test()
    {
        $bean = new ExistsType();
        $bean->setIndex('my-index');
        $bean->setLocal(true);
        $bean->setType('my-type');
        $response = $this->getElasticSearch()->client()->indices()->existsType($bean);
        $this->assertEquals(200, $response->getStatusCode());
    }
}