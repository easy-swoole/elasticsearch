<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/12
 * Time: 14:31
 */

namespace EasySwoole\ElasticSearch\Endpoints;


use EasySwoole\ElasticSearch\Exception\RuntimeException;

class GetScript extends AbstractEndpoint
{
    public function getURI(): string
    {
        $id = $this->id ?? null;

        if (isset($id)) {
            return "/_scripts/$id";
        }
        throw new RuntimeException('Missing parameter for the endpoint get_script');
    }


    public function getMethod(): string
    {
        return 'GET';
    }

    public function setId($id): GetScript
    {
        if (isset($id) !== true) {
            return $this;
        }
        $this->id = $id;

        return $this;
    }
}