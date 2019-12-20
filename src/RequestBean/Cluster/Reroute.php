<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 17:52
 */

namespace EasySwoole\ElasticSearch\RequestBean\Cluster;


class Reroute
{
    protected $dry_run;
    protected $explain;
    protected $retry_failed;
    protected $metric;
    protected $master_timeout;
    protected $timeout;
    protected $body;

    /**
     * @return mixed
     */
    public function getDryRun()
    {
        return $this->dry_run;
    }

    /**
     * @param mixed $dry_run
     */
    public function setDryRun($dry_run): void
    {
        $this->dry_run = $dry_run;
    }

    /**
     * @return mixed
     */
    public function getExplain()
    {
        return $this->explain;
    }

    /**
     * @param mixed $explain
     */
    public function setExplain($explain): void
    {
        $this->explain = $explain;
    }

    /**
     * @return mixed
     */
    public function getRetryFailed()
    {
        return $this->retry_failed;
    }

    /**
     * @param mixed $retry_failed
     */
    public function setRetryFailed($retry_failed): void
    {
        $this->retry_failed = $retry_failed;
    }

    /**
     * @return mixed
     */
    public function getMetric()
    {
        return $this->metric;
    }

    /**
     * @param mixed $metric
     */
    public function setMetric($metric): void
    {
        $this->metric = $metric;
    }

    /**
     * @return mixed
     */
    public function getMasterTimeout()
    {
        return $this->master_timeout;
    }

    /**
     * @param mixed $master_timeout
     */
    public function setMasterTimeout($master_timeout): void
    {
        $this->master_timeout = $master_timeout;
    }

    /**
     * @return mixed
     */
    public function getTimeout()
    {
        return $this->timeout;
    }

    /**
     * @param mixed $timeout
     */
    public function setTimeout($timeout): void
    {
        $this->timeout = $timeout;
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