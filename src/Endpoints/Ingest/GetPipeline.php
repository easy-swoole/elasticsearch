<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 11:05
 */

namespace EasySwoole\ElasticSearch\Endpoints\Ingest;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class GetPipeline extends AbstractEndpoint
{
    public function getURI(): string
    {
        $id = $this->id ?? null;

        if (isset($id)) {
            return "/_ingest/pipeline/$id";
        }
        return "/_ingest/pipeline";
    }


    public function getMethod(): string
    {
        return 'GET';
    }

    public function setId($id): GetPipeline
    {
        if (isset($id) !== true) {
            return $this;
        }
        $this->id = $id;

        return $this;
    }
}