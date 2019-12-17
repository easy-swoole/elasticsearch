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
    protected $params = [];
    protected $options = [];


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

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = urlencode($id);
        return $this;
    }

    public function getBody()
    {
        return empty($this->body) ? null : is_array($this->body) ? json_encode($this->body) : $this->body;
    }

    public function setBody($body)
    {
        $this->body = $body;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function setParams(array $params)
    {
        //存在client参数
        $this->extractOptions($params);
        $params = $this->convertCustom($params);
        $this->params = $this->convertArraysToStrings($params);
        return $this;
    }

    public function getOptions()
    {
        return $this->options;
    }

    private function extractOptions(&$params)
    {
        // Extract out client options, then start transforming
        if (isset($params['client']) === true) {
            // Check if the opaqueId is populated and add the header
            if (isset($params['client']['opaqueId']) === true) {
                if (isset($params['client']['headers']) === false) {
                    $params['client']['headers'] = [];
                }
                $params['client']['headers']['x-opaque-id'] = [trim($params['client']['opaqueId'])];
                unset($params['client']['opaqueId']);
            }

            $this->options['client'] = $params['client'];
            unset($params['client']);
        }
        $ignore = isset($this->options['client']['ignore']) ? $this->options['client']['ignore'] : null;
        if (isset($ignore) === true) {
            if (is_string($ignore)) {
                $this->options['client']['ignore'] = explode(",", $ignore);
            } elseif (is_array($ignore)) {
                $this->options['client']['ignore'] = $ignore;
            } else {
                $this->options['client']['ignore'] = [$ignore];
            }
        }
    }

    private function convertCustom(array $params): array
    {
        if (isset($params['custom']) === true) {
            foreach ($params['custom'] as $k => $v) {
                $params[$k] = $v;
            }
            unset($params['custom']);
        }

        return $params;
    }

    private function convertArraysToStrings(array $params)
    {
        foreach ($params as $key => &$value) {
            if (!($key === 'client' || $key == 'custom') && is_array($value) === true) {
                if ($this->isNestedArray($value) !== true) {
                    $value = implode(",", $value);
                }
            }
        }

        return $params;
    }

    private function isNestedArray(array $a): bool
    {
        foreach ($a as $v) {
            if (is_array($v)) {
                return true;
            }
        }

        return false;
    }

    abstract public function getMethod(): string;

    abstract public function getURI(): string;

}