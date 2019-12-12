<?php
/**
 * Created by PhpStorm.
 * User: mayn
 * Date: 2019/12/9
 * Time: 21:39
 */

namespace EasySwoole\ElasticSearch\Endpoints;


use EasySwoole\HttpClient\HttpClient;
use http\Exception\RuntimeException;

class Get extends AbstractEndpoint
{

    public function getURI(): string
    {
        if (isset($this->id) !== true) {
            throw new RuntimeException(
                'id is required for get'
            );
        }
        $id = $this->id;
        if (isset($this->index) !== true) {
            throw new RuntimeException(
                'index is required for get'
            );
        }
        $index = $this->index;
        $type = $this->type ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($type)) {
            return "/$index/$type/$id";
        }
        return "/$index/_doc/$id";
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setId($id): Get
    {
        if (isset($id) !== true) {
            return $this;
        }
        $this->id = $id;

        return $this;
    }
}