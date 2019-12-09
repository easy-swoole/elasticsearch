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
    abstract public function getUri();
    abstract public function getBody();
}