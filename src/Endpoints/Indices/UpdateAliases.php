<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 19:00
 */

namespace EasySwoole\ElasticSearch\Endpoints\Indices;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class UpdateAliases extends AbstractEndpoint
{
    public function getURI(): string
    {

        return "/_aliases";
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setBody($body): UpdateAliases
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}