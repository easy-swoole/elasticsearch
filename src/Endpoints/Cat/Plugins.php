<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 10:53
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cat;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Plugins extends AbstractEndpoint
{
    public function getURI(): string
    {

        return "/_cat/plugins";
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}