<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 18:52
 */

namespace EasySwoole\ElasticSearch\Endpoints\Indices;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;
use EasySwoole\ElasticSearch\Exception\RuntimeException;

class CloneIndices extends AbstractEndpoint
{
    protected $target;

    public function getURI(): string
    {
        $index = $this->index ?? null;
        $target = $this->target ?? null;

        if (isset($index) && isset($target)) {
            return "/$index/_clone/$target";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.clone');
    }

    public function getMethod(): string
    {
        return 'PUT';
    }

    public function setBody($body): CloneIndices
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setTarget($target): CloneIndices
    {
        if (isset($target) !== true) {
            return $this;
        }
        $this->target = $target;

        return $this;
    }
}