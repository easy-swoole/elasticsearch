<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 18:55
 */

namespace EasySwoole\ElasticSearch\Endpoints\Indices;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class GetSettings extends AbstractEndpoint
{
    protected $name;

    public function getURI(): string
    {
        $index = $this->index ?? null;
        $name = $this->name ?? null;

        if (isset($index) && isset($name)) {
            return "/$index/_settings/$name";
        }
        if (isset($index)) {
            return "/$index/_settings";
        }
        if (isset($name)) {
            return "/_settings/$name";
        }
        return "/_settings";
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setName($name): GetSettings
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