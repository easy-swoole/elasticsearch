<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 17:28
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cluster;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class RemoteInfo extends AbstractEndpoint
{
    public function getURI(): string
    {

        return "/_remote/info";
    }


    public function getMethod(): string
    {
        return 'GET';
    }
}