<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/16
 * Time: 18:14
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\ExistsSource;

class ExistsSourceTest extends Base
{
    public function test()
    {
        $bean = new ExistsSource();
        $bean->setIndex('my-index');
        $bean->setId('my-id');
        $response = $this->getElasticSearch()->client()->existsSource($bean);
        $this->assertEquals(200, $response->getStatusCode());
    }
}