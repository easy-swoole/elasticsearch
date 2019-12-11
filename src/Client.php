<?php


namespace EasySwoole\ElasticSearch;

use EasySwoole\ElasticSearch\RequestBean\Bulk;
use EasySwoole\ElasticSearch\RequestBean\ClearScroll;
use EasySwoole\ElasticSearch\RequestBean\Count;
use EasySwoole\ElasticSearch\RequestBean\Create;
use EasySwoole\ElasticSearch\RequestBean\Delete;
use EasySwoole\ElasticSearch\RequestBean\DeleteByQuery;
use EasySwoole\ElasticSearch\RequestBean\DeleteByQueryRethrottle;
use EasySwoole\ElasticSearch\RequestBean\DeleteScript;
use EasySwoole\ElasticSearch\RequestBean\Exists;
use EasySwoole\ElasticSearch\RequestBean\ExistsSource;
use EasySwoole\ElasticSearch\RequestBean\Explain;
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


    public function deleteByQuery(DeleteByQuery $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\DeleteByQuery();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    //待测试
    public function deleteByQueryRethrottle(DeleteByQueryRethrottle $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\DeleteByQueryRethrottle();
        $endpoint->setTaskId($bean->getTaskId());
        $endpoint->setParams($bean->toArrayWithFilter(['task_id'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    //待测试
    public function deleteScript(DeleteScript $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\DeleteScript();
        $endpoint->setId($bean->getId());
        $endpoint->setParams($bean->toArrayWithFilter(['id'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    public function exists(Exists $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Exists();
        $endpoint->setId($bean->getId());
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setParams($bean->toArrayWithFilter(['id', 'index', 'type'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    public function existsSource(ExistsSource $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\ExistsSource();
        $endpoint->setId($bean->getId());
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setParams($bean->toArrayWithFilter(['id', 'index', 'type'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    public function explain(Explain $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Explain();
        $endpoint->setId($bean->getId());
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['id', 'index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    public function fieldCaps()
    {

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


    public function getScript()
    {
    }


    public function getSource()
    {
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


    public function info()
    {
    }

    public function mget()
    {
    }


    public function msearch()
    {
    }

    public function msearchTemplate()
    {
    }

    public function mtermvectors()
    {
    }

    public function ping()
    {
    }


    public function putScript()
    {
    }


    public function rankEval()
    {
    }

    public function reindex()
    {
    }


    public function reindexRethrottle()
    {
    }

    public function renderSearchTemplate()
    {
    }

    public function scriptsPainlessExecute()
    {
    }

    public function scroll()
    {
    }


    public function search()
    {
    }

    public function searchShards()
    {
    }


    public function searchTemplate()
    {
    }


    public function termvectors()
    {
    }


    public function update()
    {
    }

    public function updateByQuery()
    {
    }


}