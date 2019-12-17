<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/16
 * Time: 18:07
 */
require_once 'vendor/autoload.php';

go(function (){
    $bean=new \EasySwoole\ElasticSearch\RequestBean\ExistsSource();
    $bean->setIndex('my-index-1576487468');
    $bean->setId('my-id-1576487468');
    $es=new \EasySwoole\ElasticSearch\ElasticSearch(new \EasySwoole\ElasticSearch\Config());
    $response=$es->client()->existsSource($bean);
    var_dump($response);
    var_dump($response->getBody());
});
