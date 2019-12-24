<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 18:03
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\PutAlias;
use EasySwoole\ElasticSearch\Tests\Base;

class PutAliasTest extends Base
{
    public function test()
    {
        $bean = new PutAlias();
        $bean->setIndex('my-index');
        $bean->setName('my-index-alias');
        $bean->setBody([
            'action' => [
                'add' => ['index' => 'my-index', 'alias' => 'my-index-alias']
            ]
        ]);
        $response = $this->getElasticSearch()->client()->indices()->putAlias($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('errors', $response);
    }
}