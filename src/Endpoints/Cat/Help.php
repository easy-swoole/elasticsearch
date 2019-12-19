<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 10:50
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cat;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Help extends AbstractEndpoint
{
    public function getURI(): string
    {

        return "/_cat";
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}