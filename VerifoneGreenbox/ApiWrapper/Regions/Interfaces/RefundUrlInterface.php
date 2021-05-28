<?php

namespace VerifoneGreenbox\ApiWrapper\Regions\Interfaces;

/**
 * Interface RefundUrlInterface
 * @package VerifoneGreenbox\ApiWrapper\Regions\Interfaces
 */
interface RefundUrlInterface
{
    /**
     * @param $transactionId
     * @return string
     */
    public function getRefundUrl($transactionId);
}