<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 10:59
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cat;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Shards extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/_cat/shards/$index";
        }
        return "/_cat/shards";
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}