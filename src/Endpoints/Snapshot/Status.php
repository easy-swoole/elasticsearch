<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 11:29
 */

namespace EasySwoole\ElasticSearch\Endpoints\Snapshot;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class Status extends AbstractEndpoint
{
    protected $repository;
    protected $snapshot;

    public function getURI(): string
    {
        $repository = $this->repository ?? null;
        $snapshot = $this->snapshot ?? null;

        if (isset($repository) && isset($snapshot)) {
            return "/_snapshot/$repository/$snapshot/_status";
        }
        if (isset($repository)) {
            return "/_snapshot/$repository/_status";
        }
        return "/_snapshot/_status";
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setRepository($repository): Status
    {
        if (isset($repository) !== true) {
            return $this;
        }
        $this->repository = $repository;

        return $this;
    }

    public function setSnapshot($snapshot): Status
    {
        if (isset($snapshot) !== true) {
            return $this;
        }
        if (is_array($snapshot) === true) {
            $snapshot = implode(",", $snapshot);
        }
        $this->snapshot = $snapshot;

        return $this;
    }
}