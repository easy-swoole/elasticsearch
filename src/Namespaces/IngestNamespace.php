<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 15:23
 */

namespace EasySwoole\ElasticSearch\Namespaces;

use EasySwoole\ElasticSearch\Endpoints\Ingest;
use EasySwoole\ElasticSearch\RequestBean\Ingest\DeletePipeline;
use EasySwoole\ElasticSearch\RequestBean\Ingest\GetPipeline;
use EasySwoole\ElasticSearch\RequestBean\Ingest\ProcessorGrok;
use EasySwoole\ElasticSearch\RequestBean\Ingest\PutPipeline;
use EasySwoole\ElasticSearch\RequestBean\Ingest\Simulate;

class IngestNamespace extends AbstractNamespace
{
    public function deletePipeline(DeletePipeline $bean)
    {
        $endpoint = new Ingest\DeletePipeline();
        $endpoint->setId($bean->getId());
        $endpoint->setParams($bean->toArrayWithFilter(['id'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function getPipeline(GetPipeline $bean)
    {
        $endpoint = new Ingest\GetPipeline();
        $endpoint->setId($bean->getId());
        $endpoint->setParams($bean->toArrayWithFilter(['id'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function processorGrok(ProcessorGrok $bean)
    {
        $endpoint = new Ingest\ProcessorGrok();
        $endpoint->setParams($bean->toArray(null, $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function putPipeline(PutPipeline $bean)
    {
        $endpoint = new Ingest\PutPipeline();
        $endpoint->setId($bean->getId());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['id', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function simulate(Simulate $bean)
    {
        $endpoint = new Ingest\Simulate();
        $endpoint->setId($bean->getId());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['id', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }
}