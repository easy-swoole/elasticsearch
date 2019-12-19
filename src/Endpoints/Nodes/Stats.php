<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 11:31
 */

namespace EasySwoole\ElasticSearch\Endpoints\Nodes;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Stats extends AbstractEndpoint
{
    protected $node_id;
    protected $metric;
    protected $index_metric;

    public function getURI(): string
    {
        $node_id = $this->node_id ?? null;
        $metric = $this->metric ?? null;
        $index_metric = $this->index_metric ?? null;

        if (isset($node_id) && isset($metric) && isset($index_metric)) {
            return "/_nodes/$node_id/stats/$metric/$index_metric";
        }
        if (isset($metric) && isset($index_metric)) {
            return "/_nodes/stats/$metric/$index_metric";
        }
        if (isset($node_id) && isset($metric)) {
            return "/_nodes/$node_id/stats/$metric";
        }
        if (isset($node_id)) {
            return "/_nodes/$node_id/stats";
        }
        if (isset($metric)) {
            return "/_nodes/stats/$metric";
        }
        return "/_nodes/stats";
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

    public function setMetric($metric): Stats
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

    public function setIndexMetric($index_metric): Stats
    {
        if (isset($index_metric) !== true) {
            return $this;
        }
        if (is_array($index_metric) === true) {
            $index_metric = implode(",", $index_metric);
        }
        $this->index_metric = $index_metric;

        return $this;
    }
}