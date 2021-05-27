<?php

namespace VerifoneGreenbox\ApiWrapper\ApiObject;

use VerifoneGreenbox\ApiWrapper\ApiEntity\Payment\Refund\Refund;
use VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Payment\Refund\RefundValidator;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\Exceptions\ConstraintException;

/**
 * Class RefundObjectBuilder
 * @package VerifoneGreenbox\ApiWrapper\ApiObject
 */
class RefundObjectBuilder extends AbstractApiObject
{
    /**
     * @var Refund
     */
    private $refund;

    public function __construct(Refund $refund)
    {
        $this->refund = $refund;
    }

    /**
     * @return array
     */
    private function buildRefundArray()
    {
        return $this->buildObjectArray($this->refund);
    }

    /**
     * @throws ConstraintException
     */
    protected function validate()
    {
        (new RefundValidator())->validate($this->refund);
    }

    /**
     * @return array
     * @throws ConstraintException
     */
    public function toArray()
    {
        $this->validate();

        return $this->buildRefundArray();
    }

    /**
     * @return false|string
     * @throws ConstraintException
     */
    public function toJson()
    {
        $this->validate();

        return json_encode($this->buildRefundArray());
    }
}