<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/9
 * Time: 17:59
 */
require_once 'vendor/autoload.php';

$config = new \EasySwoole\ElasticSearch\Config();
$config->setHost('192.168.174.130');
$config->setPort(9200);


$bean = new \EasySwoole\ElasticSearch\RequestBean\PutScript();
$bean->setId('my_id');
$bean->setBody(['script' =>
    [
        'lang' => 'painless',
        'source' => 'Math.log(_score * 2) + params.my_modifier'
    ]
]);


\Swoole\Coroutine::create(function () use ($config, $bean) {
    $obj = new \EasySwoole\ElasticSearch\ElasticSearch($config);
    $response = $obj->client()->putScript($bean);
    print_r($response->getBody());
});
