<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/13
 * Time: 11:06
 */

namespace EasySwoole\ElasticSearch\Endpoints;


class Reindex extends AbstractEndpoint
{
    public function getURI(): string
    {

        return "/_reindex";
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setBody($body): Reindex
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}