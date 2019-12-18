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

    public function clearCache(){

    }
    public function clone(){

    }

    public function close(){

    }

    public function create(Create $bean)
    {
        $endpoint = new Indices\Create();
        $endpoint->setIndex($bean->getIndex());
        $endpoint->setBody($bean->getBody());
        $endpoint->setParams($bean->toArrayWithFilter(['index', 'body'], $bean::FILTER_NOT_NULL));
        return $this->client()->request($endpoint);
    }

    public function delete(){

    }

    public function deleteAlias(){

    }
    public function deleteTemplate(){

    }
    public function exists(){

    }
    public function existsAlias(){

    }
    public function existsTemplate(){

    }
    public function existsType(){

    }
    public function flush(){

    }
    public function flushSynced(){

    }
    public function forcemerge(){

    }
    public function get(){

    }
    public function getAlias(){

    }

    public function getFieldMapping(){

    }
    public function getMapping(){

    }
    public function getSettings(){

    }
    public function getTemplate(){

    }
    public function getUpgrade(){

    }
    public function open(){

    }
    public function putAlias(){

    }
    public function putMapping(){

    }
    public function putSettings(){

    }
    public function putTemplate(){

    }
    public function recovery(){

    }
    public function refresh(){

    }
    public function rollover(){

    }
    public function segments(){

    }
    public function shardStores(){

    }
    public function shrink(){

    }
    public function split(){

    }

    public function stats(){

    }
    public function updateAliases(){

    }
    public function upgrade(){

    }
    public function validateQuery(){

    }
    public function getAliases(){
    }

}