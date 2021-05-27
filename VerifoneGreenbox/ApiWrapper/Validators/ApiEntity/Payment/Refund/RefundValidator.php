<?php

namespace VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Payment\Refund;

use VerifoneGreenbox\ApiWrapper\ApiEntity\Payment\Refund\Refund;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\IntegerConstraint;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\StringConstraint;

/**
 * Class RefundValidator
 * @package VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Payment\Refund
 */
class RefundValidator
{
    public function validate(Refund $refund)
    {
        new IntegerConstraint($refund->getAmount());
        new StringConstraint($refund->getId());

        if ($refund->getReason() !== null) {
            new StringConstraint($refund->getReason());
        }

        if ($refund->getCreatedDateTime() !== null) {
            new StringConstraint($refund->getCreatedDateTime());
        }
    }
}
