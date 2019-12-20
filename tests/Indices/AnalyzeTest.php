<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 18:32
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Analyze;
use EasySwoole\ElasticSearch\Tests\Base;

class AnalyzeTest extends Base
{
    public function test()
    {
        $bean = new Analyze();
        $bean->setIndex('my-index');
        $bean->setBody([
            'analyzer' => 'standard',
            'text' => 'a'
        ]);
        $response = $this->getElasticSearch()->client()->indices()->analyze($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertIsArray($response);
        $this->assertArrayNotHasKey('errors', $response);
    }
}