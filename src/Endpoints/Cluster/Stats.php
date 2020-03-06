<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 17:33
 */

namespace EasySwoole\ElasticSearch\Endpoints\Cluster;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Stats extends AbstractEndpoint
{
    protected $node_id;

    public function getURI(): string
    {
        $node_id = $this->node_id ?? null;

        if (isset($node_id)) {
            return "/_cluster/stats/nodes/$node_id";
        }
        return "/_cluster/stats";
    }


    public function getMethod(): string
    {
        return 'GET';
    }

    public function setNodeId($node_id): Stats
    {
        if (isset($node_id) !== true) {
            return $this;
        }
        if (is_array($node_id) === true) {
            $node_id = implode(",", $node_id);
        }
        $this->node_id = $node_id;

        return $this;
    }
}