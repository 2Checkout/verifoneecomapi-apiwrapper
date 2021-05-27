<?php

namespace VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Checkout;

use VerifoneGreenbox\ApiWrapper\ApiEntity\Checkout\Card;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\BooleanConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\StringConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\ValuesConstraint;

class CardValidator
{
    public function validate(Card $card)
    {
        if ($card->getDynamicDescriptor() !== null) {
            new StringConstraint($card->getDynamicDescriptor(), sprintf('The field %s must be a string', 'getDynamicDescriptor'));
        }
        if ($card->getAccountValidation() !== null) {
            new BooleanConstraint($card->getAccountValidation(), 'The field $card->getAccountValidation must be a boolean');
        }
        if ($card->getCaptureNow() !== null) {
            new BooleanConstraint($card->getCaptureNow(), sprintf('The field $card->getCaptureNow must be a boolean'));
        }
        if ($card->getCvvRequired() !== null) {
            new BooleanConstraint($card->getCvvRequired(), sprintf('The field $card->getCvvRequired must be a boolean'));
        }
        if ($card->getAuthorizationType() !== null) {
            new ValuesConstraint($card->getAuthorizationType(), ['PRE_AUTH', 'FINAL_AUTH']);
            new StringConstraint($card->getAuthorizationType(), sprintf('The field %s must be a string', 'getAuthorizationType'));
        }

        if ($card->getShopperInteraction() !== null) {
            new ValuesConstraint($card->getShopperInteraction(), ["ECOMMERCE", "MAIL", "TELEPHONE"]);
            new StringConstraint($card->getShopperInteraction(), sprintf('The field %s must be a string', 'getShopperInteraction'));
        }
        if ($card->getPaymentContractId() !== null) {
            new StringConstraint($card->getPaymentContractId(), sprintf('The field %s must be a string', 'getPaymentContractId'));
        }
    }
}
