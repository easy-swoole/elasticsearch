<?php
/**
 * Created by PhpStorm.
 * User: mayn
 * Date: 2019/12/9
 * Time: 23:20
 */

require_once 'vendor/autoload.php';

$config = new \EasySwoole\ElasticSearch\Config();
$config->setHost('192.168.174.130');
$config->setPort(9200);


$bean = new \EasySwoole\ElasticSearch\RequestBean\Get();
$bean->setIndex('my-index');
//$bean->setType('my-type');
$bean->setId('my-id');


\Swoole\Coroutine::create(function () use ($config, $bean) {
    $obj = new \EasySwoole\ElasticSearch\ElasticSearch($config);
    $response = $obj->client()->get($bean);
    print_r($response->getBody());
});