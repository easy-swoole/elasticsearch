<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/11
 * Time: 14:54
 */

namespace EasySwoole\ElasticSearch\Endpoints;

use EasySwoole\ElasticSearch\Exception\RuntimeException;
use EasySwoole\HttpClient\HttpClient;

class Explain extends AbstractEndpoint
{
    public function getMethod()
    {
        return isset($this->body) ? HttpClient::METHOD_POST : HttpClient::METHOD_GET;
    }

    public function getUri()
    {
        if (isset($this->id) !== true) {
            throw new RuntimeException(
                'id is required for explain'
            );
        }
        $id = $this->id;
        if (isset($this->index) !== true) {
            throw new RuntimeException(
                'index is required for explain'
            );
        }
        $index = $this->index;
        $type = $this->type ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($type)) {
            return "/$index/$type/$id/_explain";
        }
        return "/$index/_explain/$id";
    }

    public function setBody($body): Explain
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setId(string $id): Explain
    {
        if (isset($id) !== true) {
            return $this;
        }
        $this->id = $id;

        return $this;
    }
}