<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 18:08
 */

namespace EasySwoole\ElasticSearch\Namespaces;


use EasySwoole\ElasticSearch\RequestBean\Indices\Analyze;
use EasySwoole\ElasticSearch\RequestBean\Indices\Create;
use EasySwoole\ElasticSearch\Endpoints\Indices;

class IndicesNamespace extends AbstractNamespace
{
    public function analyze(Analyze $bean)
    {
        $endpoint = new Indices\Analyze();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'body'], $bean::FILTER_NOT_NULL));
        return $this->client()->request($endpoint);
    }

    public function create(Create $bean)
    {
        $endpoint = new Indices\Create();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'body'], $bean::FILTER_NOT_NULL));
        return $this->client()->request($endpoint);
    }
}