<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 11:02
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cat;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Tasks extends AbstractEndpoint
{
    public function getURI(): string
    {

        return "/_cat/tasks";
    }


    public function getMethod(): string
    {
        return 'GET';
    }
}