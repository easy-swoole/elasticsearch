<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/16
 * Time: 18:19
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\Explain;

class ExplainTest extends Base
{
    public function test(){
        $bean = new Explain();
        $bean->setIndex('my-index');
        $bean->setId('my-id');
        $response = $this->getElasticSearch()->client()->explain($bean);
        $this->assertEquals(200, $response->getStatusCode());
    }
}