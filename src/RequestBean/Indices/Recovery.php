<?php
/**
 * Created by PhpStorm.
 * User: mayn
 * Date: 2019/12/18
 * Time: 23:14
 */

namespace EasySwoole\ElasticSearch\RequestBean\Indices;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Recovery extends AbstractBean
{
    protected $index;
    protected $detailed;
    protected $active_only;

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
    public function getDetailed()
    {
        return $this->detailed;
    }

    /**
     * @param mixed $detailed
     */
    public function setDetailed($detailed): void
    {
        $this->detailed = $detailed;
    }

    /**
     * @return mixed
     */
    public function getActiveOnly()
    {
        return $this->active_only;
    }

    /**
     * @param mixed $active_only
     */
    public function setActiveOnly($active_only): void
    {
        $this->active_only = $active_only;
    }
}