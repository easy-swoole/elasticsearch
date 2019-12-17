<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/17
 * Time: 14:15
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\Reindex;
//参考 文档
//https://blog.csdn.net/ctwy291314/article/details/82734667
class ReindexTest extends Base
{
    public function test()
    {
        $bean = new Reindex();
        $bean->setBody([
            'source' => [
                'index' => 'my-index'
            ],
            'dest' => [
                'index' => 'my-index-new'
            ]
        ]);
        $response = $this->getElasticSearch()->client()->reindex($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertIsArray($response);
        $this->assertArrayHasKey('took', $response);
    }
}