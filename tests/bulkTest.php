<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/17
 * Time: 17:52
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\Bulk;

class bulkTest extends Base
{
    public function test()
    {
        $bean = new Bulk();
        $bean->setIndex('my-index');
        $bean->setType('my-type');
        $params = [];
        $nameArr = ['赵', '钱', '孙', '李', '周', '吴', '郑', '王'];
        for ($i = 1; $i <= 5; $i++) {
            $params[] = [
                'create' => [   #创建
                    '_index' => 'my_index',
                    '_type' => 'my_type',
                    '_id' => $i * 1000
                ]
            ];
            $params[] = [
                'test-field' => $nameArr[mt_rand(0, 7)],
            ];
        }

        $bean->setBody($params);
        $response = $this->getElasticSearch()->client()->bulk($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertIsArray($response);
        $this->assertArrayHasKey('errors', $response);
        $this->assertEquals(true, $response['errors']);
    }
}