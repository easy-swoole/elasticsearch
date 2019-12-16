<?php
/**
 * Created by PhpStorm.
 * User: mayn
 * Date: 2019/12/17
 * Time: 0:04
 */

namespace EasySwoole\ElasticSearch\Tests;


use EasySwoole\ElasticSearch\RequestBean\FieldCaps;

class FieldCapsTest extends Base
{
    public function test()
    {
        $bean = new FieldCaps();
        $bean->setIndex('my-index');
        $bean->setFields('test-field');

        $response = $this->getElasticSearch()->client()->fieldCaps($bean)->getBody();
        $response = json_decode($response, true);
        $this->assertArrayHasKey('fields', $response);

    }
}