<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/12
 * Time: 15:59
 */

namespace EasySwoole\ElasticSearch\Endpoints;


class Info extends AbstractEndpoint
{
    public function getURI(): string
    {
        return "/";
    }


    public function getMethod(): string
    {
        return 'GET';
    }
}