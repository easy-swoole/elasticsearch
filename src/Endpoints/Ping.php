<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/13
 * Time: 10:09
 */

namespace EasySwoole\ElasticSearch\Endpoints;


class Ping extends AbstractEndpoint
{
    public function getURI(): string
    {

        return "/";
    }

    public function getMethod(): string
    {
        return 'HEAD';
    }
}