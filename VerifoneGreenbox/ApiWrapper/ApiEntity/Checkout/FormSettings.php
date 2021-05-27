<?php

namespace VerifoneGreenbox\ApiWrapper\ApiEntity\Checkout;

class FormSettings
{
    private $submitTitle;
    private $useDifferentBrand;
    private $selectCardBrand;
    private $brandNotValid;
    private $cvv3NotValid;
    private $cvvNotValid;
    private $cvv4NotValid;
    private $lengthNotValid;
    private $monthNotValid;
    private $yearNotValid;
    private $nrNotValid;
    private $cvvPlaceholder3;
    private $cvvPlaceholder4;
    private $cardNumberPlaceholder;
    private $expiryPlaceholder;

    /**
     * @return mixed
     */
    public function getCvvNotValid()
    {
        return $this->cvvNotValid;
    }

    /**
     * @param mixed $cvvNotValid
     * @return FormSettings
     */
    public function setCvvNotValid($cvvNotValid)
    {
        $this->cvvNotValid = $cvvNotValid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSubmitTitle()
    {
        return $this->submitTitle;
    }

    /**
     * @param mixed $submitTitle
     * @return FormSettings
     */
    public function setSubmitTitle($submitTitle)
    {
        $this->submitTitle = $submitTitle;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getUseDifferentBrand()
    {
        return $this->useDifferentBrand;
    }

    /**
     * @param mixed $useDifferentBrand
     * @return FormSettings
     */
    public function setUseDifferentBrand($useDifferentBrand)
    {
        $this->useDifferentBrand = $useDifferentBrand;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getSelectCardBrand()
    {
        return $this->selectCardBrand;
    }

    /**
     * @param mixed $selectCardBrand
     * @return FormSettings
     */
    public function setSelectCardBrand($selectCardBrand)
    {
        $this->selectCardBrand = $selectCardBrand;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getBrandNotValid()
    {
        return $this->brandNotValid;
    }

    /**
     * @param mixed $brandNotValid
     * @return FormSettings
     */
    public function setBrandNotValid($brandNotValid)
    {
        $this->brandNotValid = $brandNotValid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCvv3NotValid()
    {
        return $this->cvv3NotValid;
    }

    /**
     * @param mixed $cvv3NotValid
     * @return FormSettings
     */
    public function setCvv3NotValid($cvv3NotValid)
    {
        $this->cvv3NotValid = $cvv3NotValid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCvv4NotValid()
    {
        return $this->cvv4NotValid;
    }

    /**
     * @param mixed $cvv4NotValid
     * @return FormSettings
     */
    public function setCvv4NotValid($cvv4NotValid)
    {
        $this->cvv4NotValid = $cvv4NotValid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLengthNotValid()
    {
        return $this->lengthNotValid;
    }

    /**
     * @param mixed $lengthNotValid
     * @return FormSettings
     */
    public function setLengthNotValid($lengthNotValid)
    {
        $this->lengthNotValid = $lengthNotValid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMonthNotValid()
    {
        return $this->monthNotValid;
    }

    /**
     * @param mixed $monthNotValid
     * @return FormSettings
     */
    public function setMonthNotValid($monthNotValid)
    {
        $this->monthNotValid = $monthNotValid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getYearNotValid()
    {
        return $this->yearNotValid;
    }

    /**
     * @param mixed $yearNotValid
     * @return FormSettings
     */
    public function setYearNotValid($yearNotValid)
    {
        $this->yearNotValid = $yearNotValid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getNrNotValid()
    {
        return $this->nrNotValid;
    }

    /**
     * @param mixed $nrNotValid
     * @return FormSettings
     */
    public function setNrNotValid($nrNotValid)
    {
        $this->nrNotValid = $nrNotValid;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCvvPlaceholder3()
    {
        return $this->cvvPlaceholder3;
    }

    /**
     * @param mixed $cvvPlaceholder3
     * @return FormSettings
     */
    public function setCvvPlaceholder3($cvvPlaceholder3)
    {
        $this->cvvPlaceholder3 = $cvvPlaceholder3;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCvvPlaceholder4()
    {
        return $this->cvvPlaceholder4;
    }

    /**
     * @param mixed $cvvPlaceholder4
     * @return FormSettings
     */
    public function setCvvPlaceholder4($cvvPlaceholder4)
    {
        $this->cvvPlaceholder4 = $cvvPlaceholder4;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCardNumberPlaceholder()
    {
        return $this->cardNumberPlaceholder;
    }

    /**
     * @param mixed $cardNumberPlaceholder
     * @return FormSettings
     */
    public function setCardNumberPlaceholder($cardNumberPlaceholder)
    {
        $this->cardNumberPlaceholder = $cardNumberPlaceholder;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getExpiryPlaceholder()
    {
        return $this->expiryPlaceholder;
    }

    /**
     * @param mixed $expiryPlaceholder
     * @return FormSettings
     */
    public function setExpiryPlaceholder($expiryPlaceholder)
    {
        $this->expiryPlaceholder = $expiryPlaceholder;
        return $this;
    }

}