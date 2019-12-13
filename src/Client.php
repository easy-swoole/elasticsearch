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
use EasySwoole\ElasticSearch\RequestBean\FieldCaps;
use EasySwoole\ElasticSearch\RequestBean\Get;
use EasySwoole\ElasticSearch\RequestBean\GetScript;
use EasySwoole\ElasticSearch\RequestBean\GetSource;
use EasySwoole\ElasticSearch\RequestBean\Index;
use EasySwoole\ElasticSearch\RequestBean\Mget;
use EasySwoole\ElasticSearch\RequestBean\Msearch;
use EasySwoole\ElasticSearch\RequestBean\MsearchTemplate;
use EasySwoole\ElasticSearch\RequestBean\MTermVectors;
use EasySwoole\ElasticSearch\RequestBean\PutScript;
use EasySwoole\ElasticSearch\RequestBean\RankEval;
use EasySwoole\ElasticSearch\RequestBean\Reindex;
use EasySwoole\ElasticSearch\RequestBean\ReindexRethrottle;
use EasySwoole\ElasticSearch\RequestBean\RenderSearchTemplate;
use EasySwoole\ElasticSearch\RequestBean\ScriptsPainlessExecute;
use EasySwoole\ElasticSearch\RequestBean\Scroll;
use EasySwoole\ElasticSearch\RequestBean\Search;
use EasySwoole\ElasticSearch\RequestBean\SearchShards;
use EasySwoole\ElasticSearch\RequestBean\SearchTemplate;
use EasySwoole\ElasticSearch\RequestBean\TermVectors;
use EasySwoole\ElasticSearch\RequestBean\Update;
use EasySwoole\ElasticSearch\RequestBean\UpdateByQuery;
use EasySwoole\ElasticSearch\RequestBean\UpdateByQueryRethrottle;
use EasySwoole\HttpClient\Bean\Response;

class Client
{

    private $elasticSearch;

    public function __construct(ElasticSearch $elasticSearch)
    {
        $this->elasticSearch = $elasticSearch;
    }

    //待测试
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

    //待测试
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


    public function fieldCaps(FieldCaps $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\FieldCaps();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }


    public function get(Get $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Get();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setId($bean->getId());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'id'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }


    public function getScript(GetScript $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\GetScript();
        $endpoint->setId($bean->getId());
        $endpoint->setParams($bean->toArrayWithFilter(['id'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }


    public function getSource(GetSource $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\GetSource();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setId($bean->getId());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'id'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }


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
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Info();
        return $this->elasticSearch->request($endpoint);
    }

    public function mget(Mget $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Mget();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    //待测试
    public function msearch(Msearch $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Msearch();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    //待测试
    public function msearchTemplate(MsearchTemplate $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\MsearchTemplate();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    //待测试
    public function mtermvectors(MTermVectors $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\MTermVectors();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }


    public function ping()
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Ping();
        return $this->elasticSearch->request($endpoint);
    }


    public function putScript(PutScript $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\PutScript();
        $endpoint->setId($bean->getId());
        $endpoint->setContext($bean->getContext());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['id', 'context', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }


    public function rankEval(RankEval $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\RankEval();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    public function reindex(Reindex $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Reindex();
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }


    public function reindexRethrottle(ReindexRethrottle $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\ReindexRethrottle();
        $endpoint->setTaskId($bean->getTaskId());
        $endpoint->setParams($bean->toArrayWithFilter(['task_id'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    public function renderSearchTemplate(RenderSearchTemplate $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\RenderSearchTemplate();
        $endpoint->setId($bean->getId());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['id', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    public function scriptsPainlessExecute(ScriptsPainlessExecute $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\ScriptsPainlessExecute();
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    public function scroll(Scroll $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Scroll();
        $endpoint->setScrollId($bean->getScrollId());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['scroll_id', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }


    public function search(Search $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Search();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    public function searchShards(SearchShards $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\SearchShards();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }


    public function searchTemplate(SearchTemplate $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\SearchTemplate();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }


    public function termvectors(TermVectors $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\TermVectors();
        $endpoint->setId($bean->getId());
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['id', 'index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }


    public function update(Update $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Update();
        $endpoint->setId($bean->getId());
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['id', 'index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    public function updateByQuery(UpdateByQuery $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\UpdateByQuery();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }

    public function updateByQueryRethrottle(UpdateByQueryRethrottle $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\UpdateByQueryRethrottle();
        $endpoint->setTaskId($bean->getTaskId());
        $endpoint->setParams($bean->toArrayWithFilter(['task_id'], $bean::FILTER_NOT_NULL));
        return $this->elasticSearch->request($endpoint);
    }
}