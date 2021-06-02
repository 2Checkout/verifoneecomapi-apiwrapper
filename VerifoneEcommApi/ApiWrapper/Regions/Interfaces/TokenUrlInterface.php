<?php

namespace VerifoneEcomAPI\ApiWrapper\Regions\Interfaces;

/**
 * Interface TokenUrlInterface
 * @package VerifoneEcomAPI\ApiWrapper\Regions\Interfaces
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