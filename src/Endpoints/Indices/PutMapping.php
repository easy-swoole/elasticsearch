<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 18:57
 */

namespace EasySwoole\ElasticSearch\Endpoints\Indices;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class PutMapping extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;
        $type = $this->type ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($index) && isset($type)) {
            return "/$index/$type/_mapping";
        }
        if (isset($type)) {
            return "/_mappings/$type";
        }
        if (isset($index)) {
            return "/$index/_mapping";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.put_mapping');
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function setBody($body): PutMapping
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}