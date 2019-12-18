<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 18:54
 */

namespace EasySwoole\ElasticSearch\Endpoints\Indices;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;
use EasySwoole\ElasticSearch\Exception\RuntimeException;

class ExistsType extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;
        $type = $this->type ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($index) && isset($type)) {
            return "/$index/_mapping/$type";
        }
        throw new RuntimeException('Missing parameter for the endpoint indices.exists_type');
    }

    public function getMethod(): string
    {
        return 'HEAD';
    }
}