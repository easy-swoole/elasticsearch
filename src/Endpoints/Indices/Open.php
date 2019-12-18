<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 18:57
 */

namespace EasySwoole\ElasticSearch\Endpoints\Indices;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;
use EasySwoole\ElasticSearch\Exception\RuntimeException;

class Open extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_open";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.open');
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}