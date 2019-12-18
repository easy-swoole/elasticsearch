<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 18:59
 */

namespace EasySwoole\ElasticSearch\Endpoints\Indices;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Segments extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_segments";
        }
        return "/_segments";
    }

    public function getParamWhitelist(): array
    {
        return [
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'verbose'
        ];
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}