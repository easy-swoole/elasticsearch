<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 18:08
 */

namespace EasySwoole\ElasticSearch\Namespaces;

use EasySwoole\ElasticSearch\RequestBean\Indices\Analyze;
use EasySwoole\ElasticSearch\RequestBean\Indices\ClearCache;
use EasySwoole\ElasticSearch\RequestBean\Indices\CloneIndices;
use EasySwoole\ElasticSearch\RequestBean\Indices\Close;
use EasySwoole\ElasticSearch\RequestBean\Indices\Create;
use EasySwoole\ElasticSearch\Endpoints\Indices;
use EasySwoole\ElasticSearch\RequestBean\Indices\Delete;
use EasySwoole\ElasticSearch\RequestBean\Indices\DeleteAlias;
use EasySwoole\ElasticSearch\RequestBean\Indices\DeleteTemplate;
use EasySwoole\ElasticSearch\RequestBean\Indices\Exists;
use EasySwoole\ElasticSearch\RequestBean\Indices\ExistsAlias;
use EasySwoole\ElasticSearch\RequestBean\Indices\ExistsTemplate;
use EasySwoole\ElasticSearch\RequestBean\Indices\ExistsType;
use EasySwoole\ElasticSearch\RequestBean\Indices\Flush;
use EasySwoole\ElasticSearch\RequestBean\Indices\FlushSynced;
use EasySwoole\ElasticSearch\RequestBean\Indices\Forcemerge;
use EasySwoole\ElasticSearch\RequestBean\Indices\Get;
use EasySwoole\ElasticSearch\RequestBean\Indices\GetAlias;
use EasySwoole\ElasticSearch\RequestBean\Indices\GetFieldMapping;
use EasySwoole\ElasticSearch\RequestBean\Indices\GetMapping;
use EasySwoole\ElasticSearch\RequestBean\Indices\GetSettings;
use EasySwoole\ElasticSearch\RequestBean\Indices\GetTemplate;
use EasySwoole\ElasticSearch\RequestBean\Indices\GetUpgrade;
use EasySwoole\ElasticSearch\RequestBean\Indices\Open;
use EasySwoole\ElasticSearch\RequestBean\Indices\PutAlias;
use EasySwoole\ElasticSearch\RequestBean\Indices\PutMapping;
use EasySwoole\ElasticSearch\RequestBean\Indices\PutSettings;
use EasySwoole\ElasticSearch\RequestBean\Indices\PutTemplate;
use EasySwoole\ElasticSearch\RequestBean\Indices\Recovery;
use EasySwoole\ElasticSearch\RequestBean\Indices\Refresh;
use EasySwoole\ElasticSearch\RequestBean\Indices\Rollover;
use EasySwoole\ElasticSearch\RequestBean\Indices\Segments;
use EasySwoole\ElasticSearch\RequestBean\Indices\ShardStores;
use EasySwoole\ElasticSearch\RequestBean\Indices\Shrink;
use EasySwoole\ElasticSearch\RequestBean\Indices\Split;
use EasySwoole\ElasticSearch\RequestBean\Indices\Stats;
use EasySwoole\ElasticSearch\RequestBean\Indices\UpdateAliases;
use EasySwoole\ElasticSearch\RequestBean\Indices\Upgrade;
use EasySwoole\ElasticSearch\RequestBean\Indices\ValidateQuery;

class IndicesNamespace extends AbstractNamespace
{
    public function analyze(Analyze $bean)
    {
        $endpoint = new Indices\Analyze();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function clearCache(ClearCache $bean)
    {
        $endpoint = new Indices\ClearCache();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function clone(CloneIndices $bean)
    {
        $endpoint = new Indices\CloneIndices();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setTarget($bean->getTarget());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'target', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function close(Close $bean)
    {
        $endpoint = new Indices\Close();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function create(Create $bean)
    {
        $endpoint = new Indices\Create();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function delete(Delete $bean)
    {
        $endpoint = new Indices\Delete();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function deleteAlias(DeleteAlias $bean)
    {
        $endpoint = new Indices\DeleteAlias();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setName($bean->getName());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'name'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function deleteTemplate(DeleteTemplate $bean)
    {
        $endpoint = new Indices\DeleteTemplate();
        $endpoint->setName($bean->getName());
        $endpoint->setParams($bean->toArrayWithFilter(['name'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function exists(Exists $bean)
    {
        $endpoint = new Indices\Exists();
        $endpoint->setIndex($bean->getIndex());
        $bean->setClientSetting('verbose', true);
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function existsAlias(ExistsAlias $bean)
    {
        $endpoint = new Indices\ExistsAlias();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setName($bean->getName());
        $bean->setClientSetting('verbose', true);
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'name'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function existsTemplate(ExistsTemplate $bean)
    {
        $endpoint = new Indices\ExistsTemplate();
        $endpoint->setName($bean->getName());
        $bean->setClientSetting('verbose', true);
        $endpoint->setParams($bean->toArrayWithFilter(['name'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function existsType(ExistsType $bean)
    {
        $endpoint = new Indices\ExistsType();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $bean->setClientSetting('verbose', true);
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function flush(Flush $bean)
    {
        $endpoint = new Indices\Flush();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function flushSynced(FlushSynced $bean)
    {
        $endpoint = new Indices\FlushSynced();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function forcemerge(Forcemerge $bean)
    {
        $endpoint = new Indices\Forcemerge();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function get(Get $bean)
    {
        $endpoint = new Indices\Get();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function getAlias(GetAlias $bean)
    {
        $endpoint = new Indices\GetAlias();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setName($bean->getName());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'name'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function getFieldMapping(GetFieldMapping $bean)
    {
        $endpoint = new Indices\GetFieldMapping();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setFields($bean->getFields());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'fields'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function getMapping(GetMapping $bean)
    {
        $endpoint = new Indices\GetMapping();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function getSettings(GetSettings $bean)
    {
        $endpoint = new Indices\GetSettings();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setName($bean->getName());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'name'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function getTemplate(GetTemplate $bean)
    {
        $endpoint = new Indices\GetTemplate();
        $endpoint->setName($bean->getName());
        $endpoint->setParams($bean->toArrayWithFilter(['name'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function getUpgrade(GetUpgrade $bean)
    {
        $endpoint = new Indices\GetUpgrade();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function open(Open $bean)
    {
        $endpoint = new Indices\Open();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function putAlias(PutAlias $bean)
    {
        $endpoint = new Indices\PutAlias();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setName($bean->getName());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'name', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function putMapping(PutMapping $bean)
    {
        $endpoint = new Indices\PutMapping();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function putSettings(PutSettings $bean)
    {
        $endpoint = new Indices\PutSettings();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function putTemplate(PutTemplate $bean)
    {
        $endpoint = new Indices\PutTemplate();
        $endpoint->setName($bean->getName());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['name', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function recovery(Recovery $bean)
    {
        $endpoint = new Indices\Recovery();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function refresh(Refresh $bean)
    {
        $endpoint = new Indices\Refresh();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function rollover(Rollover $bean)
    {
        $endpoint = new Indices\Rollover();
        $endpoint->setAlias($bean->getAlias());
        $endpoint->setNewIndex($bean->getNewIndex());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['alias', 'new_index', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function segments(Segments $bean)
    {
        $endpoint = new Indices\Segments();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function shardStores(ShardStores $bean)
    {
        $endpoint = new Indices\ShardStores();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function shrink(Shrink $bean)
    {
        $endpoint = new Indices\Shrink();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setTarget($bean->getTarget());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'target', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function split(Split $bean)
    {
        $endpoint = new Indices\Split();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setTarget($bean->getTarget());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'target', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function stats(Stats $bean)
    {
        $endpoint = new Indices\Stats();
        $endpoint->setMetric($bean->getMetric());
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'metric'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function updateAliases(UpdateAliases $bean)
    {
        $endpoint = new Indices\UpdateAliases();
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function upgrade(Upgrade $bean)
    {
        $endpoint = new Indices\Upgrade();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setParams($bean->toArrayWithFilter(['index'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }


    public function validateQuery(ValidateQuery $bean)
    {
        $endpoint = new Indices\ValidateQuery();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setType($bean->getType());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'type', 'body'], $bean::FILTER_NOT_NULL));
        return $this->request($endpoint);
    }

    public function getAliases(GetAlias $bean)
    {
        return $this->getAlias($bean);
    }
}