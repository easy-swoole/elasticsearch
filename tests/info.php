<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/12
 * Time: 16:09
 */

require_once 'vendor/autoload.php';

$config = new \EasySwoole\ElasticSearch\Config();
$config->setHost('192.168.174.130');
$config->setPort(9200);


//$bean = new \EasySwoole\ElasticSearch\RequestBean\Index();
//$bean->setIndex('my_index_2');
//$bean->setType('my_type_2');
////$bean->setId('my_id');
//$bean->setBody(['testField' => 'abd12']);


\Swoole\Coroutine::create(function () use ($config) {
    $obj = new \EasySwoole\ElasticSearch\ElasticSearch($config);
    $response = $obj->client()->info();
    print_r($response->getBody());
});