<?php

namespace VerifoneApi\ApiWrapper\Regions\Interfaces;

/**
 * Interface CustomerUrlInterface
 * @package VerifoneApi\ApiWrapper\Regions\Interfaces
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