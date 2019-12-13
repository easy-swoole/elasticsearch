<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/13
 * Time: 11:11
 */

namespace EasySwoole\ElasticSearch\Endpoints;


class Search extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;
        $type = $this->type ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($index) && isset($type)) {
            return "/$index/$type/_search";
        }
        if (isset($index)) {
            return "/$index/_search";
        }
        return "/_search";
    }

    public function getMethod(): string
    {
        return isset($this->body) ? 'POST' : 'GET';
    }

    public function setBody($body): Search
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}