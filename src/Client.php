<?php


namespace EasySwoole\ElasticSearch;

use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;
use EasySwoole\ElasticSearch\Endpoints\Ping;
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
use EasySwoole\ElasticSearch\RequestBean\Info;
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
use EasySwoole\HttpClient\HttpClient;

class Client
{


    private $config;


    public function __construct(Config $config)
    {
        $this->config = $config;
    }

    //待测试
    public function bulk(Bulk $bean)
    {
        $endpoint = new Endpoints\Bulk();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function clearScroll(ClearScroll $bean)
    {

    }


    public function count(Count $bean)
    {
        $endpoint = new Endpoints\Count();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function create(Create $bean)
    {
        $endpoint = new Endpoints\Create();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setId($bean->getId());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'id', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function delete(Delete $bean)
    {
        $endpoint = new Endpoints\Delete();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setId($bean->getId());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'id'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function deleteByQuery(DeleteByQuery $bean)
    {
        $endpoint = new Endpoints\DeleteByQuery();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    //待测试
    public function deleteByQueryRethrottle(DeleteByQueryRethrottle $bean)
    {
        $endpoint = new Endpoints\DeleteByQueryRethrottle();
        $endpoint->setTaskId($bean->getTaskId());
        $endpoint->setParams($bean->toArrayWithFilter(['task_id'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    //待测试
    public function deleteScript(DeleteScript $bean)
    {
        $endpoint = new Endpoints\DeleteScript();
        $endpoint->setId($bean->getId());
        $endpoint->setParams($bean->toArrayWithFilter(['id'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function exists(Exists $bean)
    {
        $endpoint = new Endpoints\Exists();
        $endpoint->setId($bean->getId());
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setParams($bean->toArrayWithFilter(['id', 'index', 'type'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function existsSource(ExistsSource $bean)
    {
        $endpoint = new Endpoints\ExistsSource();
        $endpoint->setId($bean->getId());
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setParams($bean->toArrayWithFilter(['id', 'index', 'type'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function explain(Explain $bean)
    {
        $endpoint = new Endpoints\Explain();
        $endpoint->setId($bean->getId());
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['id', 'index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function fieldCaps(FieldCaps $bean)
    {
        $endpoint = new Endpoints\FieldCaps();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function get(Get $bean)
    {
        $endpoint = new Endpoints\Get();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setId($bean->getId());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'id'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function getScript(GetScript $bean)
    {
        $endpoint = new Endpoints\GetScript();
        $endpoint->setId($bean->getId());
        $endpoint->setParams($bean->toArrayWithFilter(['id'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function getSource(GetSource $bean)
    {
        $endpoint = new Endpoints\GetSource();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setId($bean->getId());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'id'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function index(Index $bean): Response
    {
        $endpoint = new Endpoints\Index();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setId($bean->getId());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'id', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function info(Info $bean)
    {
        $endpoint = new Endpoints\Info();
        $endpoint->setParams($bean->toArray(null, $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function mget(Mget $bean)
    {
        $endpoint = new \EasySwoole\ElasticSearch\Endpoints\Mget();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    //待测试
    public function msearch(Msearch $bean)
    {
        $endpoint = new Endpoints\Msearch();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    //待测试
    public function msearchTemplate(MsearchTemplate $bean)
    {
        $endpoint = new Endpoints\MsearchTemplate();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    //待测试
    public function mtermvectors(MTermVectors $bean)
    {
        $endpoint = new Endpoints\MTermVectors();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function ping()
    {
        $endpoint = new Ping();
        return $this->request($endpoint);
    }


    public function putScript(PutScript $bean)
    {
        $endpoint = new Endpoints\PutScript();
        $endpoint->setId($bean->getId());
        $endpoint->setContext($bean->getContext());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['id', 'context', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function rankEval(RankEval $bean)
    {
        $endpoint = new Endpoints\RankEval();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function reindex(Reindex $bean)
    {
        $endpoint = new Endpoints\Reindex();
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function reindexRethrottle(ReindexRethrottle $bean)
    {
        $endpoint = new Endpoints\ReindexRethrottle();
        $endpoint->setTaskId($bean->getTaskId());
        $endpoint->setParams($bean->toArrayWithFilter(['task_id'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function renderSearchTemplate(RenderSearchTemplate $bean)
    {
        $endpoint = new Endpoints\RenderSearchTemplate();
        $endpoint->setId($bean->getId());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['id', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function scriptsPainlessExecute(ScriptsPainlessExecute $bean)
    {
        $endpoint = new Endpoints\ScriptsPainlessExecute();
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function scroll(Scroll $bean)
    {
        $endpoint = new Endpoints\Scroll();
        $endpoint->setScrollId($bean->getScrollId());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['scroll_id', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function search(Search $bean)
    {
        $endpoint = new Endpoints\Search();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function searchShards(SearchShards $bean)
    {
        $endpoint = new Endpoints\SearchShards();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function searchTemplate(SearchTemplate $bean)
    {
        $endpoint = new Endpoints\SearchTemplate();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function termvectors(TermVectors $bean)
    {
        $endpoint = new Endpoints\TermVectors();
        $endpoint->setId($bean->getId());
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['id', 'index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function update(Update $bean)
    {
        $endpoint = new Endpoints\Update();
        $endpoint->setId($bean->getId());
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['id', 'index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function updateByQuery(UpdateByQuery $bean)
    {
        $endpoint = new Endpoints\UpdateByQuery();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function updateByQueryRethrottle(UpdateByQueryRethrottle $bean)
    {
        $endpoint = new Endpoints\UpdateByQueryRethrottle();
        $endpoint->setTaskId($bean->getTaskId());
        $endpoint->setParams($bean->toArrayWithFilter(['task_id'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function request(AbstractEndpoint $endpoint): Response
    {
        $options = $endpoint->getOptions();

        $url = 'http://' . $this->config->getHost() . ':' . $this->config->getPort() . $endpoint->getUri();

        empty($endpoint->getParams()) || $url .= '?' . http_build_query($endpoint->getParams());

        $httpClient = new HttpClient($url);

        $headers = ['Content-Type' => HttpClient::CONTENT_TYPE_APPLICATION_JSON];
        if (isset($options['client']['headers'])) {
            $headers = array_merge($headers, $options['client']['headers']);
        }

        isset($options['client']['setting']) && $httpClient->setClientSetting($options['client']['setting']);

        switch ($endpoint->getMethod()) {
            case HttpClient::METHOD_POST:
                $response = $httpClient->post($endpoint->getBody(), $headers);
                break;
            case HttpClient::METHOD_PUT:
                $response = $httpClient->put($endpoint->getBody(), $headers);
                break;
            case HttpClient::METHOD_DELETE:
                $response = $httpClient->delete($headers);
                break;
            case HttpClient::METHOD_HEAD:
                $response = $httpClient->head($headers);
                break;
            default:
                $response = $httpClient->get($headers);
        }
        return $response;
    }
}