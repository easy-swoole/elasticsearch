<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 10:51
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cat;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class NodeAttrs extends AbstractEndpoint
{

    public function getURI(): string
    {

        return "/_cat/nodeattrs";
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}