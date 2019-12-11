<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/11
 * Time: 13:56
 */

namespace EasySwoole\ElasticSearch\Endpoints;


use EasySwoole\ElasticSearch\Exception\RuntimeException;
use EasySwoole\HttpClient\HttpClient;

class ExistsSource extends AbstractEndpoint
{
    public function getMethod()
    {
        return HttpClient::METHOD_HEAD;
    }

    public function getUri()
    {
        if (empty($this->getId())) {
            throw new RuntimeException(
                'id is required for exists_source'
            );
        }
        $id = $this->getId();
        if (empty($this->getIndex())) {
            throw new RuntimeException(
                'index is required for exists_source'
            );
        }
        $index = $this->getIndex();
        $type = $this->getType() ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($type)) {
            return "/$index/$type/$id/_source";
        }
        return "/$index/_source/$id";
    }

    public function setId(string $id)
    {
        if (!empty($id)) {
            $this->id = urlencode($id);
        }
        return $this;
    }
}