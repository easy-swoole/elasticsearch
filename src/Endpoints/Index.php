<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/9
 * Time: 17:04
 */

namespace EasySwoole\ElasticSearch\Endpoints;


use EasySwoole\ElasticSearch\Exception\RuntimeException;
use EasySwoole\HttpClient\HttpClient;

class Index extends AbstractEndpoint
{

    public function getMethod()
    {
        return HttpClient::METHOD_POST;
    }

    public function getUri()
    {
        if ($this->getIndex() == null) {
            throw new RuntimeException('index is required for index');
        }
        $index = $this->getIndex();
        $id = $this->getId() ?? null;
        $type = $this->getType() ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($type) && isset($id)) {
            return "/$index/$type/$id";
        }
        if (isset($id)) {
            return "/$index/_doc/$id";
        }
        if (isset($type)) {
            return "/$index/$type";
        }
        return "/$index/_doc";
    }

    public function setBody($body)
    {
        if (!empty($body)) {
            $this->body = $body;
        }
        return $this;
    }

    public function setId(string $id)
    {
        if (!empty($id)) {
            $this->id = urlencode($id);
        }
        return $this;
    }
}