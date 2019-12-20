<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/18
 * Time: 18:58
 */

namespace EasySwoole\ElasticSearch\Endpoints\Indices;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;
use EasySwoole\ElasticSearch\Exception\RuntimeException;

class Rollover extends AbstractEndpoint
{
    protected $alias;
    protected $new_index;

    public function getURI(): string
    {
        if (isset($this->alias) !== true) {
            throw new RuntimeException(
                'alias is required for rollover'
            );
        }
        $alias = $this->alias;
        $new_index = $this->new_index ?? null;

        if (isset($new_index)) {
            return "/$alias/_rollover/$new_index";
        }
        return "/$alias/_rollover";
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setBody($body): Rollover
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setAlias($alias): Rollover
    {
        if (isset($alias) !== true) {
            return $this;
        }
        $this->alias = $alias;

        return $this;
    }

    public function setNewIndex($new_index): Rollover
    {
        if (isset($new_index) !== true) {
            return $this;
        }
        $this->new_index = $new_index;

        return $this;
    }
}