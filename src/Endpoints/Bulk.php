<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/10
 * Time: 9:42
 */

namespace EasySwoole\ElasticSearch\Endpoints;


use EasySwoole\HttpClient\HttpClient;

class Bulk extends AbstractEndpoint
{
    public function getMethod()
    {
        return HttpClient::METHOD_POST;
    }

    public function getUri()
    {
        $index = $this->getIndex() ?? null;
        $type = $this->getType() ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($index) && isset($type)) {
            return "/$index/$type/_bulk";
        }
        if (isset($index)) {
            return "/$index/_bulk";
        }
        return "/_bulk";
    }


}