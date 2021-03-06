<?php

namespace VerifoneEcomAPI\ApiWrapper;

/**
 * Class Settings
 * @package VerifoneEcomAPI\ApiWrapper
 */
class Settings
{
    private $test;
    private $region;
    private $api_user;
    private $api_key;
    private $test_api_user;
    private $test_api_key;
    private $_3ds_enable;
    private $payment_contract_id;
    private $_3ds_contract_id;
    private $test_entity_id;
    private $entity_id;
    private $curl_verify_ssl;
    private $test_payment_contract_id;
    private $test_3ds_contract_id;
    private $overlay_on_place_order;
    private $cvv_on_payment;
    private $complete_order_on_payment;
    private $manualCapture;

    /**
     * @return mixed
     */
    public function getManualCapture()
    {
        return $this->manualCapture;
    }

    /**
     * @param mixed $manualCapture
     * @return Settings
     */
    public function setManualCapture($manualCapture)
    {
        $this->manualCapture = $manualCapture;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCvvOnPayment()
    {
        return $this->cvv_on_payment;
    }

    /**
     * @param mixed $cvv_on_payment
     *
     * @return $this
     */
    public function setCvvOnPayment($cvv_on_payment)
    {
        $this->cvv_on_payment = $cvv_on_payment;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getOverlayOnPlaceOrder()
    {
        return $this->overlay_on_place_order;
    }

    /**
     * @param mixed $overlay_on_place_order
     *
     * @return $this
     */
    public function setOverlayOnPlaceOrder($overlay_on_place_order)
    {
        $this->overlay_on_place_order = $overlay_on_place_order;

        return $this;
    }

    /**
     * @param mixed $test_payment_contract_id
     *
     * @return $this
     */
    public function setTestPaymentContractId($test_payment_contract_id)
    {
        $this->test_payment_contract_id = $test_payment_contract_id;

        return $this;
    }

    /**
     * @param mixed $test_3ds_contract_id
     *
     * @return $this
     */
    public function setTest3dsContractId($test_3ds_contract_id)
    {
        $this->test_3ds_contract_id = $test_3ds_contract_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurlVerifySsl()
    {
        return $this->curl_verify_ssl;
    }

    /**
     * @param mixed $curl_verify_ssl
     *
     * @return $this
     */
    public function setCurlVerifySsl($curl_verify_ssl)
    {
        $this->curl_verify_ssl = $curl_verify_ssl;

        return $this;
    }

    /**
     * @param mixed $test_entity_id
     *
     * @return $this
     */
    public function setTestEntityId($test_entity_id)
    {
        $this->test_entity_id = $test_entity_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityId()
    {
        return $this->isTest() ? $this->test_entity_id : $this->entity_id;
    }

    /**
     * @param mixed $entity_id
     *
     * @return $this
     */
    public function setEntityId($entity_id)
    {
        $this->entity_id = $entity_id;

        return $this;
    }

    /**
     * @return mixed
     */
    public function get3dsContractId()
    {
        return $this->isTest() ? $this->test_3ds_contract_id : $this->_3ds_contract_id;
    }

    /**
     * @param $contractId
     *
     * @return $this
     */
    public function set3dsContractId($contractId)
    {
        $this->_3ds_contract_id = $contractId;

        return $this;
    }

    /**
     * @return mixed
     */
    public function isTest()
    {
        return $this->test;
    }

    /**
     * @return mixed
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * @return mixed
     */
    public function getApiUserId()
    {
        return $this->isTest() ? $this->test_api_user : $this->api_user;
    }

    /**
     * @return mixed
     */
    public function getApiKey()
    {
        return $this->isTest() ? $this->test_api_key : $this->api_key;
    }

    /**
     * @return mixed
     */
    public function is3dsEnabled()
    {
        return $this->_3ds_enable;
    }

    /**
     * @return mixed
     */
    public function getPaymentContractId()
    {
        return $this->isTest() ? $this->test_payment_contract_id : $this->payment_contract_id;
    }

    /**
     * @return mixed
     */
    public function getCompleteOrderOnPayment()
    {
        return $this->complete_order_on_payment;
    }

    /**
     * @param mixed $test
     *
     * @return $this
     */
    public function setTest($test)
    {
        $this->test = $test;

        return $this;
    }

    /**
     * @param mixed $region
     *
     * @return $this
     */
    public function setRegion($region)
    {
        $this->region = $region;

        return $this;
    }

    /**
     * @param mixed $api_user
     *
     * @return $this
     */
    public function setApiUserId($api_user)
    {
        $this->api_user = $api_user;

        return $this;
    }

    /**
     * @param mixed $api_key
     *
     * @return $this
     */
    public function setApiKey($api_key)
    {
        $this->api_key = $api_key;

        return $this;
    }

    /**
     * @param mixed $test_api_user
     *
     * @return $this
     */
    public function setTestApiUserId($test_api_user)
    {
        $this->test_api_user = $test_api_user;

        return $this;
    }

    /**
     * @param mixed $test_api_key
     *
     * @return $this
     */
    public function setTestApiKey($test_api_key)
    {
        $this->test_api_key = $test_api_key;

        return $this;
    }


    /**
     * @param $_3ds
     *
     * @return $this
     */
    public function set3dsEnable($_3ds)
    {
        $this->_3ds_enable = $_3ds;

        return $this;
    }

    /**
     * @param mixed $payment_contract_id
     *
     * @return $this
     */
    public function setPaymentContractId($payment_contract_id)
    {
        $this->payment_contract_id = $payment_contract_id;

        return $this;
    }

    /**
     * @param $complete_order_on_payment
     *
     * @return $this
     */
    public function setCompleteOrderOnPayment($complete_order_on_payment)
    {
        $this->complete_order_on_payment = $complete_order_on_payment;

        return $this;
    }
}