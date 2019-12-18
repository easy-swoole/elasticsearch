<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 18:55
 */

namespace EasySwoole\ElasticSearch\Endpoints\Indices;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class ForceMerge extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_forcemerge";
        }
        return "/_forcemerge";
    }

    public function getMethod(): string
    {
        return 'POST';
    }
}