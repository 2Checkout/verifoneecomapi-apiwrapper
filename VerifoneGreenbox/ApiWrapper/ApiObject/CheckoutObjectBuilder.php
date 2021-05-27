<?php

namespace VerifoneGreenbox\ApiWrapper\ApiObject;

use VerifoneGreenbox\ApiWrapper\ApiEntity\Checkout\Card;
use VerifoneGreenbox\ApiWrapper\ApiEntity\Checkout\Checkout;
use VerifoneGreenbox\ApiWrapper\ApiEntity\Checkout\FormSettings;
use VerifoneGreenbox\ApiWrapper\ApiEntity\Checkout\I18n;
use VerifoneGreenbox\ApiWrapper\ApiEntity\Checkout\ThreedSecure;
use VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Checkout\CardValidator;
use VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Checkout\CheckoutValidator;
use VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Checkout\FormSettingsValidator;
use VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Checkout\I18nValidator;
use VerifoneGreenbox\ApiWrapper\Validators\ApiEntity\Checkout\ThreedSecureValidator;
use VerifoneGreenbox\ApiWrapper\Validators\Constraints\Exceptions\ConstraintException;

/**
 * Class CheckoutObjectBuilder
 * @package VerifoneGreenbox\ApiWrapper\ApiObject
 */
class CheckoutObjectBuilder extends AbstractApiObject
{
    private $checkout;
    private $card;
    private $threedSecure;
    private $formSettings;
    private $i18n;

    public function __construct(
        Checkout $checkout,
        Card $card,
        ThreedSecure $threedSecure,
        FormSettings $formSettings = null,
        I18n $i18n = null
    )
    {
        $this->checkout = $checkout;
        $this->card = $card;
        $this->threedSecure = $threedSecure;
        $this->formSettings = $formSettings;
        $this->i18n = $i18n;
    }

    private function buildCardArray()
    {
        if ($this->card !== null) {
            $threed_secure = [
                'threed_secure' => $this->buildThreedSecureArray()
            ];

            return [
               'configurations' =>  [
                   'card' => array_merge($threed_secure, $this->buildObjectArray($this->card))
               ]
            ];
        }

        return null;
    }

    private function buildCheckoutArray()
    {
        if ($this->checkout !== null) {
            return $this->buildObjectArray($this->checkout);
        }

        return null;
    }

    private function buildi18nArray()
    {
        if ($this->i18n !== null) {
            return ['i18n' => $this->buildObjectArray($this->i18n)];
        }

        return null;
    }

    private function buildFormSettingsArray()
    {
        if ($this->formSettings !== null) {
            return ['form_settings' => $this->buildObjectArray($this->formSettings)];
        }

        return null;
    }

    private function buildThreedSecureArray()
    {
        return $this->buildObjectArray($this->threedSecure);
    }

    private function glueObjects() {
        $array = array_merge(
            $this->buildCardArray(),
            $this->buildCheckoutArray()
        );

        $formSettings = $this->buildFormSettingsArray();
        if(null !== $formSettings) {
            $array = array_merge(
                $array,
                $formSettings
            );
        }

        $i18nArray = $this->buildi18nArray();
        if(null !== $formSettings) {
            $array = array_merge(
                $array,
                $i18nArray
            );
        }

        return $array;
    }

    /**
     * @throws ConstraintException
     */
    protected function validate()
    {
        (new CheckoutValidator())->validate($this->checkout);
        (new CardValidator())->validate($this->card);
        (new ThreedSecureValidator())->validate($this->threedSecure);
        if($this->formSettings !== null) {
            (new FormSettingsValidator())->validate($this->formSettings);
        }
        if($this->i18n !== null) {
            (new I18nValidator())->validate($this->i18n);
        }
    }

    /**
     * @return array
     * @throws ConstraintException
     */
    public function toArray()
    {
        $this->validate();

        return $this->glueObjects();
    }

    /**
     * @return false|string
     * @throws ConstraintException
     */
    public function toJson()
    {
        $this->validate();

        return json_encode($this->glueObjects());
    }
}