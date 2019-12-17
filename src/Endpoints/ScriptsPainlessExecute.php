<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/13
 * Time: 11:09
 */

namespace EasySwoole\ElasticSearch\Endpoints;


class ScriptsPainlessExecute extends AbstractEndpoint
{
    public function getURI(): string
    {
        return "/_scripts/painless/_execute";
    }

    public function getMethod(): string
    {
        return isset($this->body) ? 'POST' : 'GET';
    }

    public function setBody($body): ScriptsPainlessExecute
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }
}