<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 11:05
 */

namespace EasySwoole\ElasticSearch\Endpoints\Ingest;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class ProcessorGrok extends AbstractEndpoint
{
    public function getURI(): string
    {

        return "/_ingest/processor/grok";
    }


    public function getMethod(): string
    {
        return 'GET';
    }
}