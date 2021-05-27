<?php

namespace VerifoneGreenbox\ApiWrapper\ApiEntity\Customer;

/**
 * Class BillingShipping
 * @package VerifoneGreenbox\ApiWrapper\ApiEntity\Customer
 */
class BillingShipping
{
    private $address1;
    private $address2;
    private $address3;
    private $city;
    private $countryCode;
    private $firstName;
    private $lastName;
    private $phone;
    private $postalCode;
    private $state;

    /**
     * @return mixed
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * @param mixed $address1
     * @return BillingShipping
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress2()
    {
        return $this->address2;
    }

    /**
     * @param mixed $address2
     * @return BillingShipping
     */
    public function setAddress2($address2)
    {
        $this->address2 = $address2;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getAddress3()
    {
        return $this->address3;
    }

    /**
     * @param mixed $address3
     * @return BillingShipping
     */
    public function setAddress3($address3)
    {
        $this->address3 = $address3;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     * @return BillingShipping
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * @param mixed $countryCode
     * @return BillingShipping
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     * @return BillingShipping
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     * @return BillingShipping
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @param mixed $phone
     * @return BillingShipping
     */
    public function setPhone($phone)
    {
        $this->phone = $phone;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getPostalCode()
    {
        return $this->postalCode;
    }

    /**
     * @param mixed $postalCode
     * @return BillingShipping
     */
    public function setPostalCode($postalCode)
    {
        $this->postalCode = $postalCode;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @param mixed $state
     * @return BillingShipping
     */
    public function setState($state)
    {
        $this->state = $state;
        return $this;
    }
}
