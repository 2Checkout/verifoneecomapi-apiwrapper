<?php

namespace VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Checkout;

use VerifoneGreenbox\ApiWrapper\ApiEntity\Checkout\Checkout;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\IntegerConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\StringConstraint;

class CheckoutValidator
{
    private $entityId;
    private $currencyCode;
    private $amount;
    private $customer;
    private $expiryTime;
    private $merchantReference;
    private $returnUrl;

    public function validate(Checkout $checkout)
    {
        new StringConstraint($checkout->getEntityId(), sprintf('The field %s must be a string', 'getEntityId'));
        new StringConstraint($checkout->getCurrencyCode(), sprintf('The field %s must be a string', 'getCurrencyCode'));
        new IntegerConstraint($checkout->getAmount(), sprintf('The field %s must be an integer', 'getAmount'));

        if ($checkout->getCustomer() !== null) {
            new StringConstraint($checkout->getCustomer(), 'The field $checkout->getCustomer must be a string');
        }
        if ($checkout->getCustomer() !== null) {
            new StringConstraint($checkout->getCustomer(), 'The field $checkout->getCustomer must be a string');
        }

        if ($checkout->getMerchantReference() !== null) {
            new StringConstraint($checkout->getMerchantReference(), 'The field $checkout->getMerchantReference must be a string');
        }

        if ($checkout->getReturnUrl() !== null) {
            new StringConstraint($checkout->getReturnUrl(), 'The field $checkout->getReturnUrl must be a string');
        }
    }
}
