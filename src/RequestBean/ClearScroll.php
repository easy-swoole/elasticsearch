<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/10
 * Time: 14:51
 */

namespace EasySwoole\ElasticSearch\RequestBean;


class ClearScroll extends AbstractBean
{

    protected $scroll_id;
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