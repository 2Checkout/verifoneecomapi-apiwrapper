<?php

namespace VerifoneApi\ApiWrapper\Http;

/**
 * Class SimpleCurl
 * @package VerifoneApi\ApiWrapper\Http
 */
class SimpleCurl
{

    /**
     * @var false|resource
     */
    private $ch;

    /**
     * SimpleCurl constructor.
     */
    public function __construct()
    {
        // close any unclosed connections
        if (is_resource($this->ch)) {
            curl_close($this->ch);
        }

        $this->ch = curl_init();
    }

    /**
     * @param $option
     * @param $value
     * @return $this
     * @throws HttpException
     */
    public function setOpt($option, $value)
    {
        // do we have an open connection?
        if (!is_resource($this->ch)) {
            $this->ch = curl_init();
        }

        if (false === curl_setopt($this->ch, $option, $value)) {
            throw new HttpException('There was an error in the application');
        }

        return $this;
    }

    /**
     * @return bool|string
     * @throws HttpException
     */
    public function getResult()
    {
        $result = curl_exec($this->ch);
        $info = curl_getinfo($this->ch);
        if (curl_errno($this->ch)) {
            throw new HttpException('There was an error in the application');
        }
        curl_close($this->ch);

        if (!isset($info['http_code'])) {
            throw new HttpException('There was an error in the application');
        }

        switch ($info['http_code']) {
            case 404:
            case 500:
                throw new HttpException('There was an error in the application');
        }

        return $result;
    }
}
