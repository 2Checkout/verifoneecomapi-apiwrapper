<?php

namespace VerifoneEcomAPI\ApiWrapper\Regions\Interfaces;

/**
 * Interface CheckoutUrlInterface
 * @package VerifoneEcomAPI\ApiWrapper\Regions\Interfaces
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