<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 17:26
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cluster;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class GetSettings extends AbstractEndpoint
{
    public function getURI(): string
    {

        return "/_cluster/settings";
    }


    public function getMethod(): string
    {
        return 'GET';
    }
}