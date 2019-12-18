<?php
/**
 * Created by PhpStorm.
 * User: mayn
 * Date: 2019/12/18
 * Time: 22:50
 */

namespace EasySwoole\ElasticSearch\RequestBean\Indices;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Forcemerge extends AbstractBean
{
    protected $index;
    protected $flush;
    protected $ignore_unavailable;
    protected $allow_no_indices;
    protected $expand_wildcards;
    protected $max_num_segments;
    protected $only_expunge_deletes;

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
    public function getFlush()
    {
        return $this->flush;
    }

    /**
     * @param mixed $flush
     */
    public function setFlush($flush): void
    {
        $this->flush = $flush;
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
    public function getMaxNumSegments()
    {
        return $this->max_num_segments;
    }

    /**
     * @param mixed $max_num_segments
     */
    public function setMaxNumSegments($max_num_segments): void
    {
        $this->max_num_segments = $max_num_segments;
    }

    /**
     * @return mixed
     */
    public function getOnlyExpungeDeletes()
    {
        return $this->only_expunge_deletes;
    }

    /**
     * @param mixed $only_expunge_deletes
     */
    public function setOnlyExpungeDeletes($only_expunge_deletes): void
    {
        $this->only_expunge_deletes = $only_expunge_deletes;
    }


}