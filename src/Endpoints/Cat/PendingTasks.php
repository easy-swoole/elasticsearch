<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 10:53
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cat;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class PendingTasks extends AbstractEndpoint
{
    public function getURI(): string
    {

        return "/_cat/pending_tasks";
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}