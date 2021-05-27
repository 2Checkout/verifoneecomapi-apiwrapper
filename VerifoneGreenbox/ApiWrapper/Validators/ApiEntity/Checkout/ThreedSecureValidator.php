<?php

namespace VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Checkout;

use VerifoneGreenbox\ApiWrapper\ApiEntity\Checkout\ThreedSecure;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\BooleanConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\MaxLengthConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\StringConstraint;

class ThreedSecureValidator
{
    public function validate(ThreedSecure $threedSecure)
    {
        new BooleanConstraint($threedSecure->getEnabled(), 'The field $threedSecure->getEnabled must be a boolean');
        new StringConstraint($threedSecure->getThreedsContractId(), sprintf('The field $threedSecure->getThreedsContractId muse be a string'));
        new MaxLengthConstraint($threedSecure->getThreedsContractId(), 37, sprintf('The field $threedSecure->getThreedsContractId muse be at most 36 characters long'));
    }
}
