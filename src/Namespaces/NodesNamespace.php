<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 16:02
 */

namespace EasySwoole\ElasticSearch\Namespaces;

use EasySwoole\ElasticSearch\Endpoints\Nodes;
use EasySwoole\ElasticSearch\RequestBean\Nodes\HotThreads;
use EasySwoole\ElasticSearch\RequestBean\Nodes\Info;
use EasySwoole\ElasticSearch\RequestBean\Nodes\ReloadSecureSettings;
use EasySwoole\ElasticSearch\RequestBean\Nodes\Stats;
use EasySwoole\ElasticSearch\RequestBean\Nodes\Usage;

class NodesNamespace extends AbstractNamespace
{
    public function hotThreads(HotThreads $bean)
    {
        $endpoint = new Nodes\HotThreads();
        $endpoint->setNodeId($bean->getNodeId());
        $endpoint->setParams($bean->toArrayWithFilter(['node_id'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function info(Info $bean)
    {
        $endpoint = new Nodes\Info();
        $endpoint->setNodeId($bean->getNodeId());
        $endpoint->setMetric($bean->getMetric());
        $endpoint->setParams($bean->toArrayWithFilter(['node_id', 'metric'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function reloadSecureSettings(ReloadSecureSettings $bean)
    {
        $endpoint = new Nodes\ReloadSecureSettings();
        $endpoint->setNodeId($bean->getNodeId());
        $endpoint->setParams($bean->toArrayWithFilter(['node_id'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function stats(Stats $bean)
    {
        $endpoint = new Nodes\Stats();
        $endpoint->setNodeId($bean->getNodeId());
        $endpoint->setMetric($bean->getMetric());
        $endpoint->setIndexMetric($bean->getIndexMetric());
        $endpoint->setParams($bean->toArrayWithFilter(['node_id', 'metric', 'index_metric'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function usage(Usage $bean)
    {
        $endpoint = new Nodes\Usage();
        $endpoint->setNodeId($bean->getNodeId());
        $endpoint->setMetric($bean->getMetric());
        $endpoint->setParams($bean->toArrayWithFilter(['node_id', 'metric'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

}