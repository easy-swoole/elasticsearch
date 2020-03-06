<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/26
 * Time: 9:44
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\UpdateAliases;
use EasySwoole\ElasticSearch\Tests\Base;

class UpdateAliasesTest extends Base
{
    public function test()
    {
        $bean = new UpdateAliases();
        $bean->setBody(
            [
                'actions' => [
                    'add' => ['index' => 'my-index-1', 'alias' => 'my-index-alias-1']
                ]
            ]
        );
        $response = $this->getElasticSearch()->client()->indices()->updateAliases($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}