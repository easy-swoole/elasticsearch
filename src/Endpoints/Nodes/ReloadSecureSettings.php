<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 11:31
 */

namespace EasySwoole\ElasticSearch\Endpoints\Nodes;


use EasySwoole\ElasticSearch\Endpoints\AbstractEndpoint;

class ReloadSecureSettings extends AbstractEndpoint
{
    protected $node_id;

    public function getURI(): string
    {
        $node_id = $this->node_id ?? null;

        if (isset($node_id)) {
            return "/_nodes/$node_id/reload_secure_settings";
        }
        return "/_nodes/reload_secure_settings";
    }


    public function getMethod(): string
    {
        return 'POST';
    }

    public function setNodeId($node_id): ReloadSecureSettings
    {
        if (isset($node_id) !== true) {
            return $this;
        }
        if (is_array($node_id) === true) {
            $node_id = implode(",", $node_id);
        }
        $this->node_id = $node_id;

        return $this;
    }
}