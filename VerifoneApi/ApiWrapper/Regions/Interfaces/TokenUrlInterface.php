<?php

namespace VerifoneApi\ApiWrapper\Regions\Interfaces;

/**
 * Interface TokenUrlInterface
 * @package VerifoneApi\ApiWrapper\Regions\Interfaces
 */
interface TokenUrlInterface
{

    /**
     * @return string
     */
    public function getTokenRedirectUrl();

    /**
     * @return string
     */
    public function getTokenUrl();
}