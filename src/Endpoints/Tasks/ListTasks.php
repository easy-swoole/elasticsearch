<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 11:07
 */

namespace EasySwoole\ElasticSearch\Endpoints\Tasks;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class ListTasks extends AbstractEndpoint
{
    public function getURI(): string
    {

        return "/_tasks";
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}