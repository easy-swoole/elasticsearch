<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/17
 * Time: 16:21
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\UpdateByQuery;

//参考文档
//https://blog.csdn.net/gui66497/article/details/81389037
class UpdateByQueryTest extends Base
{
    public function test()
    {
        $bean = new UpdateByQuery();
        $bean->setIndex('my-index');
        $bean->setType('my-type');
        $bean->setBody([
            'query' => [
                'match' => ['test-field' => 'abd']
            ],
            'script' => [
                'source' => 'ctx._source["test-field"]="testing"'
            ]
        ]);
        $response = $this->getElasticSearch()->client()->updateByQuery($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertIsArray($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}