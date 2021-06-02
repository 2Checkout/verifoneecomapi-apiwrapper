<?php

namespace VerifoneEcomAPI\ApiWrapper\Regions\Interfaces;

/**
 * Interface RefundUrlInterface
 * @package VerifoneEcomAPI\ApiWrapper\Regions\Interfaces
 */
interface RefundUrlInterface
{
    /**
     * @param $transactionId
     * @return string
     */
    public function getRefundUrl($transactionId);
}