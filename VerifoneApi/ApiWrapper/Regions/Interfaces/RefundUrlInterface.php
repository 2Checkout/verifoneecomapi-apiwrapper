<?php

namespace VerifoneApi\ApiWrapper\Regions\Interfaces;

/**
 * Interface RefundUrlInterface
 * @package VerifoneApi\ApiWrapper\Regions\Interfaces
 */
interface RefundUrlInterface
{
    /**
     * @param $transactionId
     * @return string
     */
    public function getRefundUrl($transactionId);
}