<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 18:52
 */

namespace EasySwoole\ElasticSearch\Endpoints\Indices;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Delete extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.delete');
    }

    public function getMethod(): string
    {
        return 'DELETE';
    }
}