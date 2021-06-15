<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/26
 * Time: 13:38
 */

namespace EasySwoole\ElasticSearch\Tests\Ingest;


use EasySwoole\ElasticSearch\RequestBean\Ingest\Simulate;
use EasySwoole\ElasticSearch\Tests\Base;

class SimulateTest extends Base
{
    public function test()
    {
        $bean = new Simulate();
        $bean->setId('my-pipeline-id');
        $bean->setBody([
            'pipeline' => [
                'description' => '_description'
            ],
            'docs' => [
                ['_index' => 'my-index', '_id' => 'id', '_source' => ['foo' => 'bar']]
            ]
        ]);
        $response = $this->getElasticSearch()->client()->ingest()->simulate($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertArrayNotHasKey('error', $response);
    }
}