<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 11:30
 */

namespace EasySwoole\ElasticSearch\Endpoints\Nodes;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class HotThreads extends AbstractEndpoint
{
    protected $node_id;

    public function getURI(): string
    {
        $node_id = $this->node_id ?? null;

        if (isset($node_id)) {
            return "/_nodes/$node_id/hot_threads";
        }
        return "/_nodes/hot_threads";
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setNodeId($node_id): HotThreads
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