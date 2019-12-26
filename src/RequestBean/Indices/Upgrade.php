<?php
/**
 * Created by PhpStorm.
 * User: mayn
 * Date: 2019/12/18
 * Time: 23:28
 */

namespace EasySwoole\ElasticSearch\RequestBean\Indices;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Upgrade extends AbstractBean
{
    protected $index;
    protected $allow_no_indices;
    protected $expand_wildcards;
    protected $ignore_unavailable;
    protected $wait_for_completion;
    protected $only_ancient_segments;

    /**
     * @return mixed
     */
    public function getIndex()
    {
        return $this->index;
    }

    /**
     * @param mixed $index
     */
    public function setIndex($index): void
    {
        $this->index = $index;
    }

    /**
     * @return mixed
     */
    public function getAllowNoIndices()
    {
        return $this->allow_no_indices;
    }

    /**
     * @param mixed $allow_no_indices
     */
    public function setAllowNoIndices($allow_no_indices): void
    {
        $this->allow_no_indices = $allow_no_indices;
    }

    /**
     * @return mixed
     */
    public function getExpandWildcards()
    {
        return $this->expand_wildcards;
    }

    /**
     * @param mixed $expand_wildcards
     */
    public function setExpandWildcards($expand_wildcards): void
    {
        $this->expand_wildcards = $expand_wildcards;
    }

    /**
     * @return mixed
     */
    public function getIgnoreUnavailable()
    {
        return $this->ignore_unavailable;
    }

    /**
     * @param mixed $ignore_unavailable
     */
    public function setIgnoreUnavailable($ignore_unavailable): void
    {
        $this->ignore_unavailable = $ignore_unavailable;
    }

    /**
     * @return mixed
     */
    public function getWaitForCompletion()
    {
        return $this->wait_for_completion;
    }

    /**
     * @param mixed $wait_for_completion
     */
    public function setWaitForCompletion($wait_for_completion): void
    {
        $this->wait_for_completion = $wait_for_completion;
    }

    /**
     * @return mixed
     */
    public function getOnlyAncientSegments()
    {
        return $this->only_ancient_segments;
    }

    /**
     * @param mixed $only_ancient_segments
     */
    public function setOnlyAncientSegments($only_ancient_segments): void
    {
        $this->only_ancient_segments = $only_ancient_segments;
    }
}