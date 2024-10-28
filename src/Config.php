<?php


namespace EasySwoole\ElasticSearch;


use EasySwoole\Spl\SplBean;

class Config extends SplBean
{
    protected $scheme = 'http';
    protected $host = '127.0.0.1';
    protected $port = 9200;
    protected $username = '';
    protected $password = '';
    protected $sslCertFilePath = '';
    protected $sslKeyFilePath = '';

    /**
     * @return string
     */
    public function getScheme(): string
    {
        return $this->scheme;
    }

    /**
     * @param string $scheme
     */
    public function setScheme(string $scheme): void
    {
        $this->scheme = $scheme;
    }


    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host): void
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param mixed $port
     */
    public function setPort($port): void
    {
        $this->port = $port;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param $username
     */
    public function setUsername($username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param $password
     */
    public function setPassword($password): void
    {
        $this->password = $password;
    }

    public function getSslCertFilePath(): string
    {
        return $this->sslCertFilePath;
    }

    public function setSslCertFilePath(string $sslCertFilePath): void
    {
        $this->sslCertFilePath = $sslCertFilePath;
    }

    public function getSslKeyFilePath(): string
    {
        return $this->sslKeyFilePath;
    }

    public function setSslKeyFilePath(string $sslKeyFilePath): void
    {
        $this->sslKeyFilePath = $sslKeyFilePath;
    }
}
