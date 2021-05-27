<?php

namespace VerifoneGreenbox\ApiWrapper\Regions\Interfaces;

interface RefundUrlInterface
{
    /**
     * @param $transactionId
     * @return string
     */
    public function getRefundUrl($transactionId);
}