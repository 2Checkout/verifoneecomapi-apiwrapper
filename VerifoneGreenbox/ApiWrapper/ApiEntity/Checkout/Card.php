<?php

namespace VerifoneGreenbox\ApiWrapper\ApiEntity\Checkout;

class Card
{
    private $dynamicDescriptor;
    private $accountValidation;
    private $captureNow;
    private $cvvRequired;
    private $authorizationType;
    private $shopperInteraction;
    private $paymentContractId;
    private $threedSecure;

    /**
     * @return mixed
     */
    public function getThreedSecure()
    {
        return $this->threedSecure;
    }

    /**
     * @param mixed $threedSecure
     * @return Card
     */
    public function setThreedSecure(ThreedSecure $threedSecure)
    {
        $this->threedSecure = $threedSecure;
        return $this;
    }


    /**
     * @return mixed
     */
    public function getDynamicDescriptor()
    {
        return $this->dynamicDescriptor;
    }

    /**
     * @param mixed $dynamicDescriptor
     * @return Card
     */
    public function setDynamicDescriptor($dynamicDescriptor)
    {
        $this->dynamicDescriptor = $dynamicDescriptor;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAccountValidation()
    {
        return $this->accountValidation;
    }

    /**
     * @param mixed $accountValidation
     * @return Card
     */
    public function setAccountValidation($accountValidation)
    {
        $this->accountValidation = $accountValidation;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCaptureNow()
    {
        return $this->captureNow;
    }

    /**
     * @param mixed $captureNow
     * @return Card
     */
    public function setCaptureNow($captureNow)
    {
        $this->captureNow = $captureNow;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCvvRequired()
    {
        return $this->cvvRequired;
    }

    /**
     * @param mixed $cvvRequired
     * @return Card
     */
    public function setCvvRequired($cvvRequired)
    {
        $this->cvvRequired = $cvvRequired;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAuthorizationType()
    {
        return $this->authorizationType;
    }

    /**
     * @param mixed $authorizationType
     * @return Card
     */
    public function setAuthorizationType($authorizationType)
    {
        $this->authorizationType = $authorizationType;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShopperInteraction()
    {
        return $this->shopperInteraction;
    }

    /**
     * @param mixed $shopperInteraction
     * @return Card
     */
    public function setShopperInteraction($shopperInteraction)
    {
        $this->shopperInteraction = $shopperInteraction;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPaymentContractId()
    {
        return $this->paymentContractId;
    }

    /**
     * @param mixed $paymentContractId
     * @return Card
     */
    public function setPaymentContractId($paymentContractId)
    {
        $this->paymentContractId = $paymentContractId;
        return $this;
    }

}