<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 19:01
 */

namespace EasySwoole\ElasticSearch\Endpoints\Indices;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class ValidateQuery extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;
        $type = $this->type ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($index) && isset($type)) {
            return "/$index/$type/_validate/query";
        }
        if (isset($index)) {
            return "/$index/_validate/query";
        }
        return "/_validate/query";
    }

    public function getParamWhitelist(): array
    {
        return [
            'explain',
            'ignore_unavailable',
            'allow_no_indices',
            'expand_wildcards',
            'q',
            'analyzer',
            'analyze_wildcard',
            'default_operator',
            'df',
            'lenient',
            'rewrite',
            'all_shards'
        ];
    }

    public function getMethod(): string
    {
        return isset($this->body) ? 'POST' : 'GET';
    }

    public function setBody($body): ValidateQuery
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}