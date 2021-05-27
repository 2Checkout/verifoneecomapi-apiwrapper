<?php

namespace VerifoneGreenbox\ApiWrapper\Regions\Interfaces;

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