<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/11
 * Time: 13:30
 */

namespace EasySwoole\ElasticSearch\Endpoints;


use EasySwoole\ElasticSearch\Exception\RuntimeException;
use EasySwoole\HttpClient\HttpClient;

class DeleteScript extends AbstractEndpoint
{
    public function getMethod()
    {
        return HttpClient::METHOD_DELETE;
    }

    public function getUri()
    {
        $id = $this->getId() ?? null;

        if (isset($id)) {
            return "/_scripts/$id";
        }
        throw new RuntimeException('Missing parameter for the endpoint delete_script');
    }

    public function setId(string $id)
    {
        if (!empty($id)) {
            $this->id = urlencode($id);
        }
        return $this;
    }
}