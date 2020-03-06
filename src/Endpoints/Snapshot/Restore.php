<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 11:29
 */

namespace EasySwoole\ElasticSearch\Endpoints\Snapshot;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;
use EasySwoole\ElasticSearch\Exception\RuntimeException;

class Restore extends AbstractEndpoint
{
    protected $repository;
    protected $snapshot;

    public function getURI(): string
    {
        $repository = $this->repository ?? null;
        $snapshot = $this->snapshot ?? null;

        if (isset($repository) && isset($snapshot)) {
            return "/_snapshot/$repository/$snapshot/_restore";
        }
        throw new RuntimeException('Missing parameter for the endpoint snapshot.restore');
    }

    public function getMethod(): string
    {
        return 'POST';
    }

    public function setBody($body): Restore
    {
        if (isset($body) !== true) {
            return $this;
        }
        $this->body = $body;

        return $this;
    }

    public function setRepository($repository): Restore
    {
        if (isset($repository) !== true) {
            return $this;
        }
        $this->repository = $repository;

        return $this;
    }

    public function setSnapshot($snapshot): Restore
    {
        if (isset($snapshot) !== true) {
            return $this;
        }
        $this->snapshot = $snapshot;

        return $this;
    }
}