<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/17
 * Time: 10:19
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\MTermVectors;

class MtermVectorsTest extends Base
{
    public function test()
    {
        $bean = new MTermVectors();
        $bean->setIndex('my-index');
        $bean->setType('my-type');
        $bean->setBody(['ids' => ['1', '2']]);
        $response = $this->getElasticSearch()->client()->mtermvectors($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertArrayHasKey('docs', $response);
    }
}