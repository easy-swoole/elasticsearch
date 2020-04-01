<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/25
 * Time: 14:56
 */

namespace EasySwoole\ElasticSearch\Tests\Indices;


use EasySwoole\ElasticSearch\RequestBean\Indices\Rollover;
use EasySwoole\ElasticSearch\Tests\Base;

class RolloverTest extends Base
{
    public function test()
    {
        $bean = new Rollover();
        $bean->setAlias('my-index-alias');
        $bean->setNewIndex('my-index-1002');
        $bean->setBody([
            'conditions' => [
                'max_age' => '7d',
                'max_docs' => 1000,
                'max_size' => '5gb'
            ]
        ]);
        $response = $this->getElasticSearch()->client()->indices()->rollover($bean)->getBody();
        $response = json_decode($response, true);
        //print_r($response);
        $this->assertArrayNotHasKey('error', $response);
    }
}