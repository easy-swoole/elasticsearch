<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 10:50
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cat;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Indices extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/_cat/indices/$index";
        }
        return "/_cat/indices";
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}