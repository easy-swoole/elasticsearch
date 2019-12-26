<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/26
 * Time: 13:33
 */

namespace EasySwoole\ElasticSearch\Tests\Ingest;


use EasySwoole\ElasticSearch\RequestBean\Ingest\GetPipeline;
use EasySwoole\ElasticSearch\Tests\Base;

class GetPipelineTest extends Base
{
    public function test()
    {
        $bean = new GetPipeline();
        $bean->setId('my-pipeline-id');
        $response = $this->getElasticSearch()->client()->ingest()->getPipeline($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}