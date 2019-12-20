<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 17:37
 */

namespace EasySwoole\ElasticSearch\RequestBean\Cluster;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class AllocationExplain extends AbstractBean
{
    protected $include_yes_decisions;
    protected $include_disk_info;
    protected $body;

    /**
     * @return mixed
     */
    public function getIncludeYesDecisions()
    {
        return $this->include_yes_decisions;
    }

    /**
     * @param mixed $include_yes_decisions
     */
    public function setIncludeYesDecisions($include_yes_decisions): void
    {
        $this->include_yes_decisions = $include_yes_decisions;
    }

    /**
     * @return mixed
     */
    public function getIncludeDiskInfo()
    {
        return $this->include_disk_info;
    }

    /**
     * @param mixed $include_disk_info
     */
    public function setIncludeDiskInfo($include_disk_info): void
    {
        $this->include_disk_info = $include_disk_info;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body): void
    {
        $this->body = $body;
    }


}