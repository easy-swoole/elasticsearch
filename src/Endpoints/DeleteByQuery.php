<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/10
 * Time: 16:06
 */

namespace EasySwoole\ElasticSearch\Endpoints;


use EasySwoole\ElasticSearch\Exception\RuntimeException;
use EasySwoole\HttpClient\HttpClient;

class DeleteByQuery extends AbstractEndpoint
{
    public function getMethod()
    {
        return HttpClient::METHOD_POST;
    }

    public function getUri()
    {
        if (empty($this->getIndex())) {
            throw new RuntimeException('index is required for delete_by_query');
        }
        $index = $this->getIndex();
        $type = $this->getType() ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($type)) {
            return "/$index/$type/_delete_by_query";
        }
        return "/$index/_delete_by_query";
    }

    public function setBody($body)
    {
        if (!empty($body)) {
            $this->body = $body;
        }
        return $this;
    }
}