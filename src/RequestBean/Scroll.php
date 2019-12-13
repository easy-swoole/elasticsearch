<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/13
 * Time: 10:18
 */

namespace EasySwoole\ElasticSearch\RequestBean;


class Scroll extends AbstractBean
{

    protected $scroll_id;
    protected $scroll;
    protected $rest_total_hits_as_int;
    protected $body;

    /**
     * @return mixed
     */
    public function getScrollId()
    {
        return $this->scroll_id;
    }

    /**
     * @param mixed $scroll_id
     */
    public function setScrollId($scroll_id): void
    {
        $this->scroll_id = $scroll_id;
    }

    /**
     * @return mixed
     */
    public function getScroll()
    {
        return $this->scroll;
    }

    /**
     * @param mixed $scroll
     */
    public function setScroll($scroll): void
    {
        $this->scroll = $scroll;
    }

    /**
     * @return mixed
     */
    public function getRestTotalHitsAsInt()
    {
        return $this->rest_total_hits_as_int;
    }

    /**
     * @param mixed $rest_total_hits_as_int
     */
    public function setRestTotalHitsAsInt($rest_total_hits_as_int): void
    {
        $this->rest_total_hits_as_int = $rest_total_hits_as_int;
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