<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 11:31
 */

namespace EasySwoole\ElasticSearch\Endpoints\Nodes;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Usage extends AbstractEndpoint
{
    protected $node_id;
    protected $metric;

    public function getURI(): string
    {
        $node_id = $this->node_id ?? null;
        $metric = $this->metric ?? null;

        if (isset($node_id) && isset($metric)) {
            return "/_nodes/$node_id/usage/$metric";
        }
        if (isset($node_id)) {
            return "/_nodes/$node_id/usage";
        }
        if (isset($metric)) {
            return "/_nodes/usage/$metric";
        }
        return "/_nodes/usage";
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setNodeId($node_id): Usage
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

    public function setMetric($metric): Usage
    {
        if (isset($metric) !== true) {
            return $this;
        }
        if (is_array($metric) === true) {
            $metric = implode(",", $metric);
        }
        $this->metric = $metric;

        return $this;
    }
}