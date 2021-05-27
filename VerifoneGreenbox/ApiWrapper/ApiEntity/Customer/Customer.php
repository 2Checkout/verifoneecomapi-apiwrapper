<?php

namespace VerifoneGreenbox\ApiWrapper\ApiEntity\Customer;

/**
 * Class Customer
 * @package VerifoneGreenbox\ApiWrapper\ApiEntity\Customer
 */
class Customer
{
    private $companyName;
    private $companyRegistrationNumber;
    private $emailAddress;
    private $entityId;
    private $phoneNumber;
    private $title;
    private $workPhone;

    /**
     * @var BillingShipping
     */
    private $billing;

    /**
     * @var BillingShipping
     */
    private $shipping;

    /**
     * @return BillingShipping
     */
    public function getBilling()
    {
        return $this->billing;
    }

    /**
     * @param mixed $billing
     * @return Customer
     */
    public function setBilling(BillingShipping $billing)
    {
        $this->billing = $billing;
        return $this;
    }

    /**
     * @return BillingShipping
     */
    public function getShipping()
    {
        return $this->shipping;
    }

    /**
     * @param mixed $shipping
     * @return Customer
     */
    public function setShipping(BillingShipping $shipping)
    {
        $this->shipping = $shipping;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompanyName()
    {
        return $this->companyName;
    }

    /**
     * @param mixed $companyName
     * @return Customer
     */
    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCompanyRegistrationNumber()
    {
        return $this->companyRegistrationNumber;
    }

    /**
     * @param mixed $companyRegistrationNumber
     * @return Customer
     */
    public function setCompanyRegistrationNumber($companyRegistrationNumber)
    {
        $this->companyRegistrationNumber = $companyRegistrationNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * @param mixed $emailAddress
     * @return Customer
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getEntityId()
    {
        return $this->entityId;
    }

    /**
     * @param mixed $entityId
     * @return Customer
     */
    public function setEntityId($entityId)
    {
        $this->entityId = $entityId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhoneNumber()
    {
        return $this->phoneNumber;
    }

    /**
     * @param mixed $phoneNumber
     * @return Customer
     */
    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     * @return Customer
     */
    public function setTitle($title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getWorkPhone()
    {
        return $this->workPhone;
    }

    /**
     * @param mixed $workPhone
     * @return Customer
     */
    public function setWorkPhone($workPhone)
    {
        $this->workPhone = $workPhone;
        return $this;
    }
}
