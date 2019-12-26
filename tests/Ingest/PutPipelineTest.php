<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/26
 * Time: 11:08
 */

namespace EasySwoole\ElasticSearch\Tests\Ingest;


use EasySwoole\ElasticSearch\RequestBean\Ingest\PutPipeline;
use EasySwoole\ElasticSearch\Tests\Base;

class PutPipelineTest extends Base
{
    public function test()
    {
        $bean = new PutPipeline();
        $bean->setId('my-pipeline-id');
        $bean->setBody([
            'description' => 'describe pipeline',
            'processors' => [
                ['set' => [
                    'field' => 'foo',
                    'value' => 'bar'
                ]
                ]
            ]
        ]);
        $response = $this->getElasticSearch()->client()->ingest()->putPipeline($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}