<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/10
 * Time: 11:09
 */

namespace EasySwoole\ElasticSearch\RequestBean;


use EasySwoole\Spl\SplBean;

abstract class AbstractBean extends SplBean
{
    protected $pretty;
    protected $human;
    protected $error_trace;
    protected $source;
    protected $filter_path;
    protected $opaqueId;

    protected $client;
    protected $custom;

    /**
     * @return mixed
     */
    public function getPretty()
    {
        return $this->pretty;
    }

    /**
     * @param mixed $pretty
     */
    public function setPretty($pretty): void
    {
        $this->pretty = $pretty;
    }

    /**
     * @return mixed
     */
    public function getHuman()
    {
        return $this->human;
    }

    /**
     * @param mixed $human
     */
    public function setHuman($human): void
    {
        $this->human = $human;
    }

    /**
     * @return mixed
     */
    public function getErrorTrace()
    {
        return $this->error_trace;
    }

    /**
     * @param mixed $error_trace
     */
    public function setErrorTrace($error_trace): void
    {
        $this->error_trace = $error_trace;
    }

    /**
     * @return mixed
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * @param mixed $source
     */
    public function setSource($source): void
    {
        $this->source = $source;
    }

    /**
     * @return mixed
     */
    public function getFilterPath()
    {
        return $this->filter_path;
    }

    /**
     * @param mixed $filter_path
     */
    public function setFilterPath($filter_path): void
    {
        $this->filter_path = $filter_path;
    }

    /**
     * @return mixed
     */
    public function getOpaqueId()
    {
        return $this->opaqueId;
    }

    /**
     * @param mixed $opaqueId
     */
    public function setOpaqueId($opaqueId): void
    {
        $this->opaqueId = $opaqueId;
    }


    /**
     * @param $key
     * @param $value
     */
    public function setClientSetting($key, $value): void
    {
        $this->client['setting'][$key] = $value;
    }


    public function setHeader($key, $value)
    {
        $this->client['headers'][$key] = $value;
    }

    /**
     * @param mixed $headers
     */
    public function setHeaders($headers): void
    {
        $this->client['headers'] = $headers;
    }




    /**
     * @return mixed
     */
    public function getCustom()
    {
        return $this->custom;
    }

    /**
     * @param mixed $custom
     */
    public function setCustom(array $custom): void
    {
        $this->custom = $custom;
    }


    public function toArrayWithFilter(array $columns = null, $filter = null): array
    {
        $data = $this->jsonSerialize();
        if ($columns) {
            $data = array_diff_key($data, array_flip($columns));
        }
        if ($filter === self::FILTER_NOT_NULL) {
            return array_filter($data, function ($val) {
                return !is_null($val);
            });
        } else if ($filter === self::FILTER_NOT_EMPTY) {
            return array_filter($data, function ($val) {
                return !empty($val);
            });
        } else if ($filter === self::FILTER_NULL) {
            return array_filter($data, function ($val) {
                return is_null($val);
            });
        } else if ($filter === self::FILTER_EMPTY) {
            return array_filter($data, function ($val) {
                return empty($val);
            });
        } else if (is_callable($filter)) {
            return array_filter($data, $filter);
        }
        return $data;
    }
}