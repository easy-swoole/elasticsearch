<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 10:51
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cat;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Nodes extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_cat/nodes";
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}