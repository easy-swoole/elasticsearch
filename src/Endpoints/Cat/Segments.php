<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 10:59
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cat;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Segments extends AbstractEndpoint
{

    public function getURI(): string
    {
        $index = $this->index ?? null;

        if (isset($index)) {
            return "/_cat/segments/$index";
        }
        return "/_cat/segments";
    }


    public function getMethod(): string
    {
        return 'GET';
    }
}