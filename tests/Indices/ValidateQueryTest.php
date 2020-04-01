<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/26
 * Time: 10:38
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\ValidateQuery;
use EasySwoole\ElasticSearch\Tests\Base;

class ValidateQueryTest extends Base
{
    public function test()
    {
        $bean = new ValidateQuery();
        $bean->setIndex('my-index');
        $bean->setBody(
            [
                'query' => [
                    'match' => ['my-index' => 'abc']
                ]
            ]
        );
        $response = $this->getElasticSearch()->client()->indices()->validateQuery($bean)->getBody();
        $response = json_decode($response, true);
        print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}