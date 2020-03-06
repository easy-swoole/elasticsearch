<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/23
 * Time: 13:34
 */

namespace EasySwoole\ElasticSearch\Tests\Cat;


use EasySwoole\ElasticSearch\RequestBean\Cat\Snapshots;
use EasySwoole\ElasticSearch\Tests\Base;

class SnapshotsTest extends Base
{
    public function test(){
        $bean = new Snapshots();
        //$bean->setFormat(true);

        $bean->setHelp(true);
        $response = $this->getElasticSearch()->client()->cat()->snapshots($bean)->getBody();
        //var_dump($response);
        $this->assertIsString($response);
    }
}