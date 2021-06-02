<?php

namespace VerifoneEcomAPI\ApiWrapper\Regions\Interfaces;

/**
 * Interface CustomerUrlInterface
 * @package VerifoneEcomAPI\ApiWrapper\Regions\Interfaces
 */
interface CustomerUrlInterface {

    /**
     * @return string
     */
    public function postCustomerUrl();

    /**
     * @param $customerId
     * @return string
     */
    public function getCustomerUrl($customerId);
}