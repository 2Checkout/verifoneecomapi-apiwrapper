<?php

namespace VerifoneGreenbox\ApiWrapper\Regions;

use VerifoneGreenbox\ApiWrapper\Regions\Interfaces\CheckoutUrlInterface;
use VerifoneGreenbox\ApiWrapper\Regions\Interfaces\CustomerUrlInterface;
use VerifoneGreenbox\ApiWrapper\Regions\Interfaces\RefundUrlInterface;
use VerifoneGreenbox\ApiWrapper\Regions\Interfaces\TokenUrlInterface;
use VerifoneGreenbox\ApiWrapper\Settings;

abstract class AbstractRegion implements CheckoutUrlInterface, CustomerUrlInterface, RefundUrlInterface, TokenUrlInterface
{
    /**
     * @var Settings
     */
    protected $settings;

    public function __construct(Settings $settings)
    {
        $this->settings = $settings;
    }

    /**
     * @return string
     */
    public function getTokenRedirectUrl()
    {
        return $this->settings->isTest() ? $this->envTestBaseTokenRedirectUrl : $this->envLiveBaseTokenRedirectUrl;
    }

    /**
     * @return string
     */
    public function getTokenUrl()
    {
        return $this->settings->isTest() ? $this->envTestBaseTokenUrl : $this->envLiveBaseTokenUrl;
    }

    /**
     * @param $transactionId
     * @return string
     */
    public function getRefundUrl($transactionId)
    {
        $path = $this->getRefundPartialPath($transactionId);

        return $this->settings->isTest() ? $this->envTestBasePaymentsUrl . $path : $this->envLiveBasePaymentsUrl . $path;
    }

    /**
     * @return string
     */
    public function postCheckoutUrl()
    {
        $path = $this->getCheckoutPartialPath();

        return $this->settings->isTest() ? $this->envTestBaseCheckoutUrl . $path : $this->envLiveBaseCheckoutUrl . $path;
    }

    /**
     * @param $checkoutId
     * @return string
     */
    public function getCheckoutUrl($checkoutId)
    {
        $path = $this->getCheckoutPartialPath() . '/' . $checkoutId;

        return $this->settings->isTest() ? $this->envTestBaseCheckoutUrl . $path : $this->envLiveBaseCheckoutUrl . $path;
    }

    /**
     * @return string
     */
    public function postCustomerUrl()
    {
        $path = $this->getCustomerPartialPath();

        return $this->settings->isTest() ? $this->envTestBaseCustomerUrl . $path : $this->envLiveBaseCustomerUrl . $path;
    }

    /**
     * @param $customerId
     * @return string
     */
    public function getCustomerUrl($customerId)
    {
        $path = $this->getCustomerPartialPath() . '/' . $customerId;

        return $this->settings->isTest() ? $this->envTestBaseCustomerUrl . $path : $this->envLiveBaseCustomerUrl . $path;
    }

    protected function getVerifoneApiVersion()
    {
        return 'v2';
    }

    protected function getVerifonePaymentsApiVersion()
    {
        return 'v2';
    }

    protected function getRefundPartialPath($transactionId)
    {
        return sprintf(('/oidc/api/' . $this->getVerifonePaymentsApiVersion() . '/transactions/%s/refund'), $transactionId);
    }

    protected function getCustomerPartialPath()
    {
        return '/oidc/customer-service/' . $this->getVerifoneApiVersion() . '/customer';
    }

    protected function getCheckoutPartialPath()
    {
        return '/' . $this->getVerifoneApiVersion() . '/checkout';
    }
}