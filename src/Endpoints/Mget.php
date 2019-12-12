<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/12
 * Time: 16:13
 */

namespace EasySwoole\ElasticSearch\Endpoints;


class Mget extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;
        $type = $this->type ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($index) && isset($type)) {
            return "/$index/$type/_mget";
        }
        if (isset($index)) {
            return "/$index/_mget";
        }
        return "/_mget";
    }

    public function getMethod(): string
    {
        return isset($this->body) ? 'POST' : 'GET';
    }

    public function setBody($body): Mget
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}