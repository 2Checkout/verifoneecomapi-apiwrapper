<?php

namespace VerifoneGreenbox\ApiWrapper\Regions\Interfaces;

/**
 * Interface CheckoutUrlInterface
 * @package VerifoneGreenbox\ApiWrapper\Regions\Interfaces
 */
interface CheckoutUrlInterface
{

    /**
     * @return string
     */
    public function postCheckoutUrl();

    /**
     * @param $checkoutId
     * @return string
     */
    public function getCheckoutUrl($checkoutId);
}