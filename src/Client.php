<?php


namespace EasySwoole\ElasticSearch;

use EasySwoole\ElasticSearch\RequestBean\Bulk;
use EasySwoole\ElasticSearch\RequestBean\ClearScroll;
use EasySwoole\ElasticSearch\RequestBean\Count;
use EasySwoole\ElasticSearch\RequestBean\Create;
use EasySwoole\ElasticSearch\RequestBean\Delete;
use EasySwoole\ElasticSearch\RequestBean\DeleteQuery;
use EasySwoole\ElasticSearch\RequestBean\Get;
use EasySwoole\ElasticSearch\RequestBean\Index;
use EasySwoole\HttpClient\Bean\Response;

class Client
{

    private $elasticSearch;

    public function __construct(ElasticSearch $elasticSearch)
    {
        $this->elasticSearch = $elasticSearch;
    }

    public function bulk(Bulk $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Bulk();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    public function clearScroll(ClearScroll $bean)
    {

    }


    public function count(Count $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Count();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }


    public function create(Create $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Create();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setId($bean->getId());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'id', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }


    public function delete(Delete $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Delete();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setId($bean->getId());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'id'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }


    public function deleteByQuery(DeleteQuery $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\DeleteQuery();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    //
    public function index(Index $bean): Response
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Index();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setId($bean->getId());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'id', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    //
    public function get(Get $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Get();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setId($bean->getId());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'id'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }


}