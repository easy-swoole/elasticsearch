<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/16
 * Time: 17:55
 */

namespace EasySwoole\ElasticSearch\Tests;


class DeleteByQueryTest extends Base
{
    public function test()
    {
        $bean = new \EasySwoole\ElasticSearch\RequestBean\DeleteByQuery();
        $time = time();
        $bean->setIndex('my-index-' . $time);
        $bean->setBody([
            'query' => [
                'match'=>['name'=>'测试删除']
            ]
        ]);
        $response = $this->getElasticSearch()->client()->deleteByQuery($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertIsArray($response);
    }
}