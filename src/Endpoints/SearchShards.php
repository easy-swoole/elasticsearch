<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/13
 * Time: 11:13
 */

namespace EasySwoole\ElasticSearch\Endpoints;


class SearchShards extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_search_shards";
        }
        return "/_search_shards";
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}