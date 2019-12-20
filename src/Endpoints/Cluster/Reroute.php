<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 17:32
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cluster;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Reroute extends AbstractEndpoint
{
    public function getURI(): string
    {

        return "/_cluster/reroute";
    }


    public function getMethod(): string
    {
        return 'POST';
    }

    public function setBody($body): Reroute
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}