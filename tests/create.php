<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/10
 * Time: 10:09
 */

require_once 'vendor/autoload.php';

$config = new \EasySwoole\ElasticSearch\Config();
$config->setHost('192.168.174.130');
$config->setPort(9200);


$bean = new \EasySwoole\ElasticSearch\RequestBean\Create();
$bean->setIndex('my-index-3');
$bean->setType('my-type-3');
$bean->setId('my-id-3');
$bean->setBody(['test-field-3' => 'abddsadasda111111111111111']);


\Swoole\Coroutine::create(function () use ($config, $bean) {
    $obj = new \EasySwoole\ElasticSearch\ElasticSearch($config);
    $response = $obj->client()->create($bean);
    print_r($response->getBody());
});