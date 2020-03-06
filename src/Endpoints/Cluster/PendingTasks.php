<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 17:27
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cluster;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class PendingTasks extends AbstractEndpoint
{
    public function getURI(): string
    {

        return "/_cluster/pending_tasks";
    }

    public function getMethod(): string
    {
        return 'GET';
    }
}