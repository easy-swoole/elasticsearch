<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/9
 * Time: 17:59
 */
require_once 'vendor/autoload.php';

$config = new \EasySwoole\ElasticSearch\Config();
$config->setHost('192.168.17.3');
$config->setPort(9200);


$bean = new \EasySwoole\ElasticSearch\RequestBean\Index();
$bean->setIndex('my-index');
$bean->setType('my-type');
$bean->setId('my-id');
$bean->setBody(['test-field' => 'abd']);


\Swoole\Coroutine::create(function () use ($config, $bean) {
    $obj = new \EasySwoole\ElasticSearch\ElasticSearch($config);
    $response = $obj->client()->index($bean);
    print_r($response->getBody());
});
