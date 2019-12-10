<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/10
 * Time: 11:44
 */

namespace EasySwoole\ElasticSearch\Endpoints;


use EasySwoole\HttpClient\HttpClient;

class Count extends AbstractEndpoint
{
    public function getMethod()
    {
        return $this->getBody() ? HttpClient::METHOD_POST : HttpClient::METHOD_GET;;
    }

    public function getUri()
    {
        $index = $this->getIndex() ?? null;
        $type = $this->getType() ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($index) && isset($type)) {
            return "/$index/$type/_count";
        }
        if (isset($index)) {
            return "/$index/_count";
        }
        return "/_count";
    }
}