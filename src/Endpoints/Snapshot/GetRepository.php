<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 11:28
 */

namespace EasySwoole\ElasticSearch\Endpoints\Snapshot;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class GetRepository extends AbstractEndpoint
{
    protected $repository;

    public function getURI(): string
    {
        $repository = $this->repository ?? null;

        if (isset($repository)) {
            return "/_snapshot/$repository";
        }
        return "/_snapshot";
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function setRepository($repository): GetRepository
    {
        if (isset($repository) !== true) {
            return $this;
        }
        if (is_array($repository) === true) {
            $repository = implode(",", $repository);
        }
        $this->repository = $repository;

        return $this;
    }
}