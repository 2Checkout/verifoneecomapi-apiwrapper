<?php

namespace VerifoneGreenbox\ApiWrapper\ApiObject;

use VerifoneGreenbox\ApiWrapper\ApiEntity\Customer\BillingShipping;
use VerifoneGreenbox\ApiWrapper\ApiEntity\Customer\Customer;
use VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Customer\BillingShippingValidator;
use VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Customer\CustomerValidator;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\Exceptions\ConstraintException;

/**
 * Class CustomerObjectBuilder
 * @package VerifoneGreenbox\ApiWrapper\ApiObject
 */
class CustomerObjectBuilder extends AbstractApiObject
{
    /**
     * @var Customer
     */
    private $customer;

    /**
     * @var BillingShipping
     */
    private $billing;

    /**
     * @var BillingShipping
     */
    private $shipping;

    public function __construct(Customer $customer, BillingShipping $billing, BillingShipping $shipping)
    {
        $this->customer = $customer;
        $this->billing = $billing;
        $this->shipping = $shipping;
    }

    /**
     * @return array
     */
    private function buildBillingArray()
    {
        if ($this->billing !== null) {
            return $this->buildObjectArray($this->billing);
        }
    }

    /**
     * @return array
     */
    private function buildShippingArray()
    {
        if ($this->shipping !== null) {
            return $this->buildObjectArray($this->shipping);
        }
    }

    /**
     * @return array
     */
    private function buildCustomerArray()
    {
        $array = [];

        $billing = $this->buildBillingArray();
        if ($billing) {
            $array['billing'] = $billing;
        }

        $shipping = $this->buildShippingArray();
        if ($shipping) {
            $array['shipping'] = $billing;
        }

        $customer = $this->buildObjectArray($this->customer);

        return array_merge(
            $array,
            $customer
        );
    }

    /**
     * @throws ConstraintException
     */
    protected function validate()
    {
        (new CustomerValidator())->validate($this->customer);
        (new BillingShippingValidator())->validate($this->billing);
        (new BillingShippingValidator())->validate($this->shipping);
    }

    /**
     * @return array
     * @throws ConstraintException
     */
    public function toArray()
    {
        $this->validate();

        return $this->buildCustomerArray();
    }

    /**
     * @return false|string
     * @throws ConstraintException
     */
    public function toJson()
    {
        $this->validate();

        return json_encode($this->buildCustomerArray());
    }
}