<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 17:03
 */

namespace EasySwoole\ElasticSearch\Namespaces;

use EasySwoole\ElasticSearch\Endpoints\Snapshot;
use EasySwoole\ElasticSearch\RequestBean\Snapshot\CleanupRepository;
use EasySwoole\ElasticSearch\RequestBean\Snapshot\Create;
use EasySwoole\ElasticSearch\RequestBean\Snapshot\CreateRepository;
use EasySwoole\ElasticSearch\RequestBean\Snapshot\Delete;
use EasySwoole\ElasticSearch\RequestBean\Snapshot\DeleteRepository;
use EasySwoole\ElasticSearch\RequestBean\Snapshot\Get;
use EasySwoole\ElasticSearch\RequestBean\Snapshot\GetRepository;
use EasySwoole\ElasticSearch\RequestBean\Snapshot\Restore;
use EasySwoole\ElasticSearch\RequestBean\Snapshot\Status;
use EasySwoole\ElasticSearch\RequestBean\Snapshot\VerifyRepository;

class SnapshotNamespace extends AbstractNamespace
{
    public function cleanupRepository(CleanupRepository $bean)
    {
        $endpoint = new Snapshot\CleanupRepository();
        $endpoint->setRepository($bean->getRepository());
        $endpoint->setParams($bean->toArrayWithFilter(['repository'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function create(Create $bean)
    {
        $endpoint = new Snapshot\Create();
        $endpoint->setRepository($bean->getRepository());
        $endpoint->setSnapshot($bean->getSnapshot());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['repository', 'snapshot', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function createRepository(CreateRepository $bean)
    {
        $endpoint = new Snapshot\CreateRepository();
        $endpoint->setRepository($bean->getRepository());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['repository', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function delete(Delete $bean)
    {
        $endpoint = new Snapshot\Delete();
        $endpoint->setRepository($bean->getRepository());
        $endpoint->setSnapshot($bean->getSnapshot());
        $endpoint->setParams($bean->toArrayWithFilter(['repository', 'snapshot'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function deleteRepository(DeleteRepository $bean)
    {
        $endpoint = new Snapshot\DeleteRepository();
        $endpoint->setRepository($bean->getRepository());
        $endpoint->setParams($bean->toArrayWithFilter(['repository'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function get(Get $bean)
    {
        $endpoint = new Snapshot\Get();
        $endpoint->setRepository($bean->getRepository());
        $endpoint->setSnapshot($bean->getSnapshot());
        $endpoint->setParams($bean->toArrayWithFilter(['repository', 'snapshot'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function getRepository(GetRepository $bean)
    {
        $endpoint = new Snapshot\GetRepository();
        $endpoint->setRepository($bean->getRepository());
        $endpoint->setParams($bean->toArrayWithFilter(['repository'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function restore(Restore $bean)
    {
        $endpoint = new Snapshot\Restore();
        $endpoint->setRepository($bean->getRepository());
        $endpoint->setSnapshot($bean->getSnapshot());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['repository', 'snapshot', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function status(Status $bean)
    {
        $endpoint = new Snapshot\Status();
        $endpoint->setRepository($bean->getRepository());
        $endpoint->setSnapshot($bean->getSnapshot());
        $endpoint->setParams($bean->toArrayWithFilter(['repository', 'snapshot'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function verifyRepository(VerifyRepository $bean)
    {
        $endpoint = new Snapshot\VerifyRepository();
        $endpoint->setRepository($bean->getRepository());
        $endpoint->setParams($bean->toArrayWithFilter(['repository'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }
}