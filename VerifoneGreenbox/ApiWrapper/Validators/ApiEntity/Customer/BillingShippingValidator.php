<?php

namespace VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Customer;

use VerifoneGreenbox\ApiWrapper\ApiEntity\Customer\BillingShipping;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\MaxLengthConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\RegexConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\StringConstraint;

class BillingShippingValidator
{
    public function validate(BillingShipping $billingShipping)
    {
        if ($billingShipping->getAddress1() !== null) {
            new StringConstraint($billingShipping->getAddress1(), 'The field $billingShipping->getAddress1 must be a string');
            new MaxLengthConstraint($billingShipping->getAddress1(), 50, 'The field $billingShipping->getAddress1 must be at most 50 characters');
        }
        if ($billingShipping->getAddress2() !== null) {
            new StringConstraint($billingShipping->getAddress2(), 'The field $billingShipping->getAddress2 must be a string');
            new MaxLengthConstraint($billingShipping->getAddress2(), 50, 'The field $billingShipping->getAddress2 must be at most 50 characters');
        }
        if ($billingShipping->getAddress3() !== null) {
            new StringConstraint($billingShipping->getAddress3(), 'The field $billingShipping->getAddress3 must be a string');
            new MaxLengthConstraint($billingShipping->getAddress3(), 50, 'The field $billingShipping->getAddress3 must be at most 50 characters');
        }
        if ($billingShipping->getCity() !== null) {
            new StringConstraint($billingShipping->getCity(), 'The field $billingShipping->getCity must be a string');
            new MaxLengthConstraint($billingShipping->getCity(), 50, 'The field $billingShipping->getCity must be at most 50 characters');
        }
        if ($billingShipping->getCountryCode() !== null) {
            new StringConstraint($billingShipping->getCountryCode(), 'The field $billingShipping->getCountryCode must be a string');
            new MaxLengthConstraint($billingShipping->getCountryCode(), 2, 'The field $billingShipping->getCountryCode must be at most 2 characters');
        }
        if ($billingShipping->getFirstName() !== null) {
            new StringConstraint($billingShipping->getFirstName(), 'The field $billingShipping->getFirstName must be a string');
            new MaxLengthConstraint($billingShipping->getFirstName(), 50, 'The field $billingShipping->getFirstName must be at most 50 characters');
        }
        if ($billingShipping->getLastName() !== null) {
            new StringConstraint($billingShipping->getLastName(), 'The field $billingShipping->getLastName must be a string');
            new MaxLengthConstraint($billingShipping->getLastName(), 50, 'The field $billingShipping->getLastName must be at most 50 characters');
        }
        if ($billingShipping->getPhone() !== null) {
            new StringConstraint($billingShipping->getPhone(), 'The field $billingShipping->getPhone must be a string');
            new MaxLengthConstraint($billingShipping->getPhone(), 20, 'The field $billingShipping->getPhone must be at most 20 characters');
            new RegexConstraint($billingShipping->getPhone(), '/^[0-9-\s\-+().-]+$/', 'The field $billingShipping->getPhone must be at most 20 characters');
        }
        if ($billingShipping->getPostalCode() !== null) {
            new StringConstraint($billingShipping->getPostalCode(), 'The field $billingShipping->getPostalCode must be a string');
            new MaxLengthConstraint($billingShipping->getPostalCode(), 10, 'The field $billingShipping->getPostalCode must be at most 10 characters');
        }
        if ($billingShipping->getState() !== null) {
            new StringConstraint($billingShipping->getState(), 'The field $billingShipping->getState must be a string');
            new MaxLengthConstraint($billingShipping->getState(), 10, 'The field $billingShipping->getState must be at most 10 characters');
        }
    }
}


