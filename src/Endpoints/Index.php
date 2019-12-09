<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/9
 * Time: 17:04
 */

namespace EasySwoole\ElasticSearch\Endpoints;


use EasySwoole\ElasticSearch\Exception\RuntimeException;

class Index extends AbstractEndpoint
{
    private $bean;

    public function __construct(\EasySwoole\ElasticSearch\RequestBean\Index $bean)
    {
        $this->bean = $bean;
    }

    public function getUri()
    {
        if ($this->bean->getIndex() == null) {
            throw new RuntimeException(
                'index is required for index'
            );
        }
        $index = $this->bean->getIndex();
        $id = $this->bean->getId() ?? null;
        $type = $this->bean->getType() ?? null;
        if (isset($type)) {
            @trigger_error('Specifying types in urls has been deprecated', E_USER_DEPRECATED);
        }

        if (isset($type) && isset($id)) {
            return "/$index/$type/$id";
        }
        if (isset($id)) {
            return "/$index/_doc/$id";
        }
        if (isset($type)) {
            return "/$index/$type";
        }
        return "/$index/_doc";
    }

    public function getBody()
    {
        return $this->bean->getBody();
    }
}