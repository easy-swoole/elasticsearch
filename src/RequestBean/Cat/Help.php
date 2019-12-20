<?php
/**
 * Created by PhpStorm.
 * User: xcg
 * Date: 2019/12/19
 * Time: 11:56
 */

namespace EasySwoole\ElasticSearch\RequestBean\Cat;


use EasySwoole\ElasticSearch\RequestBean\AbstractBean;

class Help extends AbstractBean
{
    protected $help;
    protected $s;

    /**
     * @return mixed
     */
    public function getHelp()
    {
        return $this->help;
    }

    /**
     * @param mixed $help
     */
    public function setHelp($help): void
    {
        $this->help = $help;
    }

    /**
     * @return mixed
     */
    public function getS()
    {
        return $this->s;
    }

    /**
     * @param mixed $s
     */
    public function setS($s): void
    {
        $this->s = $s;
    }

}