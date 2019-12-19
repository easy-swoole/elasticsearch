<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 18:03
 */

namespace EasySwoole\ElasticSearch\Namespaces;

use EasySwoole\ElasticSearch\Endpoints\Cluster;
use EasySwoole\ElasticSearch\RequestBean\Cluster\AllocationExplain;
use EasySwoole\ElasticSearch\RequestBean\Cluster\GetSettings;
use EasySwoole\ElasticSearch\RequestBean\Cluster\Health;
use EasySwoole\ElasticSearch\RequestBean\Cluster\PendingTasks;
use EasySwoole\ElasticSearch\RequestBean\Cluster\PutSettings;
use EasySwoole\ElasticSearch\RequestBean\Cluster\RemoteInfo;
use EasySwoole\ElasticSearch\RequestBean\Cluster\Reroute;
use EasySwoole\ElasticSearch\RequestBean\Cluster\State;
use EasySwoole\ElasticSearch\RequestBean\Cluster\Stats;

class ClusterNamespace extends AbstractNamespace
{
    public function allocationExplain(AllocationExplain $bean)
    {
        $endpoint = new Cluster\AllocationExplain();
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function getSettings(GetSettings $bean)
    {
        $endpoint = new Cluster\GetSettings();
        $endpoint->setParams($bean->toArray(null, $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function health(Health $bean)
    {
        $endpoint = new Cluster\Health();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function pendingTasks(PendingTasks $bean)
    {
        $endpoint = new Cluster\PendingTasks();
        $endpoint->setParams($bean->toArray(null, $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function putSettings(PutSettings $bean)
    {
        $endpoint = new Cluster\PutSettings();
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function remoteInfo(RemoteInfo $bean)
    {
        $endpoint = new Cluster\RemoteInfo();
        $endpoint->setParams($bean->toArray(null, $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function reroute(Reroute $bean)
    {
        $endpoint = new Cluster\Reroute();
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function state(State $bean)
    {
        $endpoint = new Cluster\State();
        $endpoint->setMetric($bean->getMetric());
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['metric','index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function stats(Stats $bean)
    {
        $endpoint = new Cluster\Stats();
        $endpoint->setNodeId($bean->getNodeId());
        $endpoint->setParams($bean->toArrayWithFilter(['stats'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }
}