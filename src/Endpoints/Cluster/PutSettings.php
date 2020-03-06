<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 17:27
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cluster;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class PutSettings extends AbstractEndpoint
{
    public function getURI(): string
    {

        return "/_cluster/settings";
    }


    public function getMethod(): string
    {
        return 'PUT';
    }

    public function setBody($body): PutSettings
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}