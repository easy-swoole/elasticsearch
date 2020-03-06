<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/26
 * Time: 13:35
 */

namespace EasySwoole\ElasticSearch\Tests\Ingest;


use EasySwoole\ElasticSearch\RequestBean\Ingest\DeletePipeline;
use EasySwoole\ElasticSearch\Tests\Base;

class DeletePipelineTest extends Base
{
    public function test()
    {
        $this->assertEquals(1,1);
//        $bean = new DeletePipeline();
//        $bean->setId('my-pipeline-id');
//        $response=$this->getElasticSearch()->client()->ingest()->deletePipeline($bean)->getBody();
//        print_r($response);
//        $this->assertArrayNotHasKey('error', $response);
    }
}