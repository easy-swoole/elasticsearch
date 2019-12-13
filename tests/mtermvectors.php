<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/13
 * Time: 9:29
 */
require_once 'vendor/autoload.php';

$config = new \EasySwoole\ElasticSearch\Config();
$config->setHost('192.168.174.130');
$config->setPort(9200);


$bean = new \EasySwoole\ElasticSearch\RequestBean\MTermVectors();
//$bean->setIndex('my-index-3');
//$bean->setType('my-type-3');
//$bean->setId('my_id');
$bean->setBody(['docs' =>
    [
        [
            '_index' => 'my-index-3',
            '_type' => 'my-type-3',
            '_id' => 'my-id-3',
        ]
    ]
]);


\Swoole\Coroutine::create(function () use ($config, $bean) {
    $obj = new \EasySwoole\ElasticSearch\ElasticSearch($config);
    $response = $obj->client()->mtermvectors($bean);
    print_r($response->getBody());
});