<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/9
 * Time: 18:32
 */

namespace EasySwoole\ElasticSearch\Endpoints;


abstract class AbstractEndpoint
{
    protected $index;
    protected $type;
    protected $id;
    protected $body;
    protected $params;


    public function getIndex(): ?string
    {
        return $this->index;
    }

    public function setIndex(?string $index)
    {
        if (!empty($index)) {
            if (is_array($index)) {
                $index = array_map('trim', $index);
                $index = implode(",", $index);
            }
            $this->index = urlencode($index);
        }
        return $this;
    }

    public function getType(): ?string
    {
        return $this->type;
    }

    public function setType(?string $type)
    {
        if (!empty($type)) {
            if (is_array($type)) {
                $type = array_map('trim', $type);
                $type = implode(",", $type);
            }
            $this->type = urlencode($type);
        }
        return $this;
    }


    public function setId(string $id)
    {
        $this->id = urlencode($id);
        return $this;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getBody()
    {
        return empty($this->body) ? null : json_encode($this->body);
    }

    public function setParams(array $params)
    {
        $this->params = $params;
    }

    public function getParams()
    {
        return $this->params;
    }

    abstract public function getMethod();

    abstract public function getUri();

}