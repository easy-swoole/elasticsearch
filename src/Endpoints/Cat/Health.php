<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 10:49
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cat;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Health extends AbstractEndpoint
{
    public function getURI(): string
    {

        return "/_cat/health";
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}