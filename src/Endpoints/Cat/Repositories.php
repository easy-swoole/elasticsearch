<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 10:59
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cat;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Repositories extends AbstractEndpoint
{
    public function getURI(): string
    {

        return "/_cat/repositories";
    }


    public function getMethod(): string
    {
        return 'GET';
    }
}