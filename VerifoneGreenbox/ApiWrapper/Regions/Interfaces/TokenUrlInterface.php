<?php

namespace VerifoneGreenbox\ApiWrapper\Regions\Interfaces;

/**
 * Interface TokenUrlInterface
 * @package VerifoneGreenbox\ApiWrapper\Regions\Interfaces
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