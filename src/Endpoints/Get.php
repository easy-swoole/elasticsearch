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
    public function getMethod()
    {
        return HttpClient::METHOD_GET;
    }

    public function getUri()
    {
        if (!$this->getId()) {
            throw new RuntimeException('id is required for get');
        }
        $id = $this->getId();
        if (!$this->getIndex()) {
            throw new RuntimeException('index is required for get');
        }
        $index = $this->getIndex();
        $type = $this->getType() ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($type)) {
            return "/$index/$type/$id";
        }
        return "/$index/_doc/$id";
    }

}