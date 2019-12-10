<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/10
 * Time: 10:04
 */

namespace EasySwoole\ElasticSearch\Endpoints;


use EasySwoole\ElasticSearch\Exception\RuntimeException;
use EasySwoole\HttpClient\HttpClient;

class Create extends AbstractEndpoint
{

    public function getMethod()
    {
        return HttpClient::METHOD_PUT;
    }

    public function getUri()
    {
        if (empty($this->getId())) {
            throw new RuntimeException('id is required for create');
        }
        $id = $this->getId();
        if (empty($this->getIndex())) {
            throw new RuntimeException('index is required for create');
        }
        $index = $this->getIndex();
        $type = $this->getType() ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($type)) {
            return "/$index/$type/$id/_create";
        }
        return "/$index/_create/$id";
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