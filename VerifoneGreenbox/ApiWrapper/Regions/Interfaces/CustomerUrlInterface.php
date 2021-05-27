<?php

namespace VerifoneGreenbox\ApiWrapper\Regions\Interfaces;

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