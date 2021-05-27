<?php

namespace VerifoneGreenbox\ApiWrapper\ApiEntity\Checkout;

/**
 * Class I18n
 * @package VerifoneGreenbox\ApiWrapper\ApiEntity\Customer
 */
class I18n
{
    private $defaultLanguage;
    private $showLanguageOptions;

    /**
     * @return mixed
     */
    public function getDefaultLanguage()
    {
        return $this->defaultLanguage;
    }

    /**
     * @param mixed $defaultLanguage
     * @return I18n
     */
    public function setDefaultLanguage($defaultLanguage)
    {
        $this->defaultLanguage = $defaultLanguage;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getShowLanguageOptions()
    {
        return $this->showLanguageOptions;
    }

    /**
     * @param mixed $showLanguageOptions
     * @return I18n
     */
    public function setShowLanguageOptions($showLanguageOptions)
    {
        $this->showLanguageOptions = $showLanguageOptions;
        return $this;
    }
}