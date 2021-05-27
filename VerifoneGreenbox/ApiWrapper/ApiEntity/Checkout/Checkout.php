<?php

namespace VerifoneGreenbox\ApiWrapper\ApiEntity\Checkout;

/**
 * Class Checkout
 * @package VerifoneGreenbox\ApiWrapper\ApiEntity\Customer
 */
class Checkout
{
    private $entityId;
    private $currencyCode;
    private $amount;
    private $customer;
    private $expiryTime;
    private $merchantReference;
    private $returnUrl;

    /**
     * @return mixed
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * @param mixed $entityId
     * @return Checkout
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCurrencyCode()
    {
        return $this->currencyCode;
    }

    /**
     * @param mixed $currencyCode
     * @return Checkout
     */
    public function setCurrencyCode($currencyCode)
    {
        $this->currencyCode = $currencyCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param mixed $amount
     * @return Checkout
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCustomer()
    {
        return $this->customer;
    }

    /**
     * @param mixed $customer
     * @return Checkout
     */
    public function setCustomer($customer)
    {
        $this->customer = $customer;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpiryTime()
    {
        return $this->expiryTime;
    }

    /**
     * @param mixed $expiryTime
     * @return Checkout
     */
    public function setExpiryTime(\DateTimeImmutable $expiryTime)
    {
        $this->expiryTime = $expiryTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMerchantReference()
    {
        return $this->merchantReference;
    }

    /**
     * @param mixed $merchantReference
     * @return Checkout
     */
    public function setMerchantReference($merchantReference)
    {
        $this->merchantReference = $merchantReference;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getReturnUrl()
    {
        return $this->returnUrl;
    }

    /**
     * @param mixed $returnUrl
     * @return Checkout
     */
    public function setReturnUrl($returnUrl)
    {
        $this->returnUrl = $returnUrl;
        return $this;
    }
}
