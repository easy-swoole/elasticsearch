<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/11
 * Time: 13:50
 */

require_once 'vendor/autoload.php';

$config = new \EasySwoole\ElasticSearch\Config();
$config->setHost('192.168.174.130');
$config->setPort(9200);


$bean = new \EasySwoole\ElasticSearch\RequestBean\Exists();
$bean->setIndex('my-index-2');
$bean->setType('my-type-2');
$bean->setId('my-id-2');
//$bean->setBody(['test-field-2' => 'abddsadasda']);


\Swoole\Coroutine::create(function () use ($config, $bean) {
    $obj = new \EasySwoole\ElasticSearch\ElasticSearch($config);
    $response = $obj->client()->exists($bean);
    print_r($response->getBody());
});