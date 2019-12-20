<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 18:55
 */

namespace EasySwoole\ElasticSearch\Endpoints\Indices;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class GetAlias extends AbstractEndpoint
{
    protected $name;

    public function getURI(): string
    {
        $name = $this->name ?? null;
        $index = $this->index ?? null;

        if (isset($index) && isset($name)) {
            return "/$index/_alias/$name";
        }
        if (isset($index)) {
            return "/$index/_alias";
        }
        if (isset($name)) {
            return "/_alias/$name";
        }
        return "/_alias";
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setName($name): GetAlias
    {
        if (isset($name) !== true) {
            return $this;
        }
        if (is_array($name) === true) {
            $name = implode(",", $name);
        }
        $this->name = $name;

        return $this;
    }
}