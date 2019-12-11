<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/10
 * Time: 15:02
 */

namespace EasySwoole\ElasticSearch\Endpoints;


use EasySwoole\ElasticSearch\Exception\RuntimeException;
use EasySwoole\HttpClient\HttpClient;

class Delete extends AbstractEndpoint
{
    public function getMethod()
    {
        return HttpClient::METHOD_DELETE;
    }

    public function getUri()
    {
        if (empty($this->getId())) {
            throw new RuntimeException('id is required for delete');
        }
        $id = $this->getId();
        if (empty($this->getIndex())) {
            throw new RuntimeException('index is required for delete');
        }
        $index = $this->getIndex();
        $type = $this->getType() ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }
        if (isset($type)) {
            return "/$index/$type/$id";
        }
        return "/$index/_doc/$id";
    }


    public function setId(string $id)
    {
        if (!empty($id)) {
            $this->id = urlencode($id);
        }
        return $this;
    }

}