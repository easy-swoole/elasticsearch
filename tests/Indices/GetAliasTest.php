<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/24
 * Time: 11:35
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\GetAlias;
use EasySwoole\ElasticSearch\Tests\Base;

class GetAliasTest extends Base
{
    public function test(){
        $bean = new GetAlias();
        $bean->setIndex('my-index');
        $bean->setName('my-index-alias');
        $bean->setLocal(true);
        $response = $this->getElasticSearch()->client()->indices()->getAlias($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('errors', $response);
    }
}