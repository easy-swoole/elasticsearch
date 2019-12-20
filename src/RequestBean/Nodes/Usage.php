<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 15:49
 */

namespace EasySwoole\ElasticSearch\RequestBean\Nodes;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Usage extends AbstractBean
{
    protected $node_id;
    protected $metric;
    protected $timeout;

    /**
     * @return mixed
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * @param mixed $node_id
     */
    public function setNodeId($node_id): void
    {
        $this->node_id = $node_id;
    }

    /**
     * @return mixed
     */
    public function getMetric()
    {
        return $this->metric;
    }

    /**
     * @param mixed $metric
     */
    public function setMetric($metric): void
    {
        $this->metric = $metric;
    }

    /**
     * @return mixed
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @param mixed $timeout
     */
    public function setTimeout($timeout): void
    {
        $this->timeout = $timeout;
    }
}