<?php

namespace VerifoneGreenbox\ApiWrapper\ApiEntity\Payment\Refund;

/**
 * Class Refund
 * @package VerifoneGreenbox\ApiWrapper\ApiEntity\Payment\Refund
 */
class Refund
{
    private $amount;
    private $reason;
    private $id;
    private $referenceId;
    private $createdDateTime;

    /**
     * @return mixed
     */
    public function getReferenceId()
    {
        return $this->referenceId;
    }

    /**
     * @param mixed $referenceId
     * @return Refund
     */
    public function setReferenceId($referenceId)
    {
        $this->referenceId = $referenceId;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCreatedDateTime()
    {
        return $this->createdDateTime;
    }

    /**
     * @param mixed $createdDateTime
     * @return Refund
     */
    public function setCreatedDateTime($createdDateTime)
    {
        $this->createdDateTime = $createdDateTime;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     * @return Refund
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getAmount()
    {
        return $this->amount;
    }

    /**
     * @param int $amount
     * @return Refund
     */
    public function setAmount($amount): Refund
    {
        $amount = (float)$amount;
        $amount = $amount * 100;
        $this->amount = (int)$amount;
        return $this;
    }

    /**
     * @return string
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param string $reason
     * @return Refund
     */
    public function setReason( $reason): Refund
    {
        $this->reason = $reason;
        return $this;
    }
}
