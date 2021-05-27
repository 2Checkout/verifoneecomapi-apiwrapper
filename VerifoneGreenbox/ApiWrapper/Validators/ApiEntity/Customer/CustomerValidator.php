<?php

namespace VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Customer;

use VerifoneGreenbox\ApiWrapper\ApiEntity\Customer\BillingShipping;
use VerifoneGreenbox\ApiWrapper\ApiEntity\Customer\Customer;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\EmailConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\Exceptions\RequiredConstraintException;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\MaxLengthConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\RegexConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\RequiredConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\StringConstraint;

class CustomerValidator
{
    public function validate(Customer $customer)
    {
        if ($customer->getCompanyName() == null && !$customer->getBilling() instanceof BillingShipping) {
            throw new RequiredConstraintException('The Customer must have either company_name or billing(first_name and last_name) - can have both');
        }

        if ($customer->getCompanyName() == null &&
            (
                !$customer->getBilling()->getFirstName() == null
                ||
                !$customer->getBilling()->getLastName() == null
            )
        ) {
            throw new RequiredConstraintException('The Customer must have either company_name or billing(first_name and last_name) - can have both');
        }

        if ($customer->getCompanyName() !== null) {
            new StringConstraint($customer->getCompanyName(), 'The field $customer->getCompanyName must be a string');
            new MaxLengthConstraint($customer->getCompanyName(), 100, 'The field $customer->getCompanyName must be at most 100 characters');
        }

        if ($customer->getCompanyRegistrationNumber() !== null) {
            new StringConstraint($customer->getCompanyRegistrationNumber(), 'The field $customer->getCompanyRegistrationNumber must be a string');
            new MaxLengthConstraint($customer->getCompanyRegistrationNumber(), 24, 'The field $customer->getCompanyRegistrationNumber must be at most 24 characters');
        }

        if ($customer->getEmailAddress() !== null) {
            new StringConstraint($customer->getEmailAddress(), 'The field $customer->getEmailAddress must be a string');
            new MaxLengthConstraint($customer->getEmailAddress(), 24, 'The field $customer->getEmailAddress must be at most 24 characters');
            new EmailConstraint($customer->getEmailAddress(), 'The field $customer->getEmailAddress must a valid email address');
        }

        new RequiredConstraint($customer->getEntityId(), 'The field $customer->getEntityId is required');

        if ($customer->getPhoneNumber() !== null) {
            new StringConstraint($customer->getPhoneNumber(), 'The field $customer->getPhoneNumber must be a string');
            new MaxLengthConstraint($customer->getPhoneNumber(), 20, 'The field $customer->getPhoneNumber must be at most 20 characters');
            new RegexConstraint($customer->getPhoneNumber(), '/^[0-9-\s\-+().-]+$/', 'The field $customer->getPhoneNumber must be a valid phone number');
        }

        if ($customer->getWorkPhone() !== null) {
            new StringConstraint($customer->getWorkPhone(), 'The field $customer->getWorkPhone must be a string');
            new MaxLengthConstraint($customer->getWorkPhone(), 20, 'The field $customer->getWorkPhone must be at most 20 characters');
            new RegexConstraint($customer->getWorkPhone(), '/^[0-9-\s\-+().-]+$/', 'The field $customer->getWorkPhone must be a valid phone number');
        }

        if ($customer->getTitle() !== null) {
            new StringConstraint($customer->getTitle(), 'The field $customer->getTitle must be a string');
        }
    }
}


