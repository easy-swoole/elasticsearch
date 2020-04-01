<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 11:34
 */

namespace EasySwoole\ElasticSearch\Namespaces;

use EasySwoole\ElasticSearch\Endpoints\Cat;
use EasySwoole\ElasticSearch\RequestBean\Cat\Aliases;
use EasySwoole\ElasticSearch\RequestBean\Cat\Allocation;
use EasySwoole\ElasticSearch\RequestBean\Cat\Count;
use EasySwoole\ElasticSearch\RequestBean\Cat\Fielddata;
use EasySwoole\ElasticSearch\RequestBean\Cat\Health;
use EasySwoole\ElasticSearch\RequestBean\Cat\Help;
use EasySwoole\ElasticSearch\RequestBean\Cat\Indices;
use EasySwoole\ElasticSearch\RequestBean\Cat\Master;
use EasySwoole\ElasticSearch\RequestBean\Cat\NodeAttrs;
use EasySwoole\ElasticSearch\RequestBean\Cat\Nodes;
use EasySwoole\ElasticSearch\RequestBean\Cat\PendingTasks;
use EasySwoole\ElasticSearch\RequestBean\Cat\Plugins;
use EasySwoole\ElasticSearch\RequestBean\Cat\Recovery;
use EasySwoole\ElasticSearch\RequestBean\Cat\Repositories;
use EasySwoole\ElasticSearch\RequestBean\Cat\Segments;
use EasySwoole\ElasticSearch\RequestBean\Cat\Shards;
use EasySwoole\ElasticSearch\RequestBean\Cat\Snapshots;
use EasySwoole\ElasticSearch\RequestBean\Cat\Tasks;
use EasySwoole\ElasticSearch\RequestBean\Cat\Templates;
use EasySwoole\ElasticSearch\RequestBean\Cat\ThreadPool;

class CatNamespace extends AbstractNamespace
{
    public function aliases(Aliases $bean)
    {
        $endpoint = new Cat\Aliases();
        $endpoint->setName($bean->getName());
        $endpoint->setParams($bean->toArrayWithFilter(['name'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function allocation(Allocation $bean)
    {
        $endpoint = new Cat\Allocation();
        $endpoint->setNodeId($bean->getNodeId());
        $endpoint->setParams($bean->toArrayWithFilter(['node_id'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function count(Count $bean)
    {
        $endpoint = new Cat\Count();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function fielddata(Fielddata $bean)
    {
        $endpoint = new Cat\Fielddata();
        $endpoint->setFields($bean->getFields());
        $endpoint->setParams($bean->toArrayWithFilter(['fields'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function health(Health $bean)
    {
        $endpoint = new Cat\Health();
        $endpoint->setParams($bean->toArray(null, $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function help(Help $bean)
    {
        $endpoint = new Cat\Help();
        $endpoint->setParams($bean->toArray(null, $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function indices(Indices $bean)
    {
        $endpoint = new Cat\Indices();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function master(Master $bean)
    {
        $endpoint = new Cat\Master();
        $endpoint->setParams($bean->toArray(null, $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function nodeattrs(NodeAttrs $bean)
    {
        $endpoint = new Cat\Nodeattrs();
        $endpoint->setParams($bean->toArray(null, $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function nodes(Nodes $bean)
    {
        $endpoint = new Cat\Nodes();
        $endpoint->setParams($bean->toArray(null, $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function pendingTasks(PendingTasks $bean)
    {
        $endpoint = new Cat\PendingTasks();
        $endpoint->setParams($bean->toArray(null, $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function plugins(Plugins $bean)
    {
        $endpoint = new Cat\Plugins();
        $endpoint->setParams($bean->toArray(null, $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function recovery(Recovery $bean)
    {
        $endpoint = new Cat\Recovery();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function repositories(Repositories $bean)
    {
        $endpoint = new Cat\Repositories();
        $endpoint->setParams($bean->toArray(null, $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function segments(Segments $bean)
    {
        $endpoint = new Cat\Segments();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function shards(Shards $bean)
    {
        $endpoint = new Cat\Shards();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function snapshots(Snapshots $bean)
    {
        $endpoint = new Cat\Snapshots();
        $endpoint->setRepository($bean->getRepository());
        $endpoint->setParams($bean->toArrayWithFilter(['repository'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function tasks(Tasks $bean)
    {
        $endpoint = new Cat\Tasks();
        $endpoint->setParams($bean->toArray(null, $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function templates(Templates $bean)
    {
        $endpoint = new Cat\Templates();
        $endpoint->setName($bean->getName());
        $endpoint->setParams($bean->toArrayWithFilter(['name'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function threadPool(ThreadPool $bean)
    {
        $endpoint = new Cat\ThreadPool();
        $endpoint->setThreadPoolPatterns($bean->getThreadPoolPatterns());
        $endpoint->setParams($bean->toArrayWithFilter(['thread_pool_patterns'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }
}