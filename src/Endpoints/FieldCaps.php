<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/11
 * Time: 16:05
 */

namespace EasySwoole\ElasticSearch\Endpoints;


class FieldCaps extends AbstractEndpoint
{
    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/$index/_field_caps";
        }
        return "/_field_caps";
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}