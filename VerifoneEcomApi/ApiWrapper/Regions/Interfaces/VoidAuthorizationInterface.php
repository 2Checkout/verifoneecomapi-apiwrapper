<?php

namespace VerifoneEcomAPI\ApiWrapper\Regions\Interfaces;

/**
 * Interface VoidAuthorizationInterface
 * @package VerifoneEcomAPI\ApiWrapper\Regions\Interfaces
 */
interface VoidAuthorizationInterface
{

    /**
     * @param $transactionId
     */
    public function postVoidAuthorizationUrl($transactionId);
}