<?php

namespace VerifoneEcomAPI\ApiWrapper\Regions;

use VerifoneEcomAPI\ApiWrapper\Regions\Interfaces\CaptureInterface;
use VerifoneEcomAPI\ApiWrapper\Regions\Interfaces\CheckoutUrlInterface;
use VerifoneEcomAPI\ApiWrapper\Regions\Interfaces\CustomerUrlInterface;
use VerifoneEcomAPI\ApiWrapper\Regions\Interfaces\RefundUrlInterface;
use VerifoneEcomAPI\ApiWrapper\Regions\Interfaces\TokenUrlInterface;
use VerifoneEcomAPI\ApiWrapper\Regions\Interfaces\VoidAuthorizationInterface;
use VerifoneEcomAPI\ApiWrapper\Settings;

abstract class AbstractRegion implements CheckoutUrlInterface, CustomerUrlInterface, RefundUrlInterface, TokenUrlInterface, CaptureInterface, VoidAuthorizationInterface
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

    public function postCaptureUrl($captureId)
    {
        $path = sprintf('/oidc/api/%s/transactions/%s/capture', $this->getVerifoneApiVersion(), $captureId);

        return $this->settings->isTest() ? $this->envTestBasePaymentsUrl . $path : $this->envLiveBasePaymentsUrl . $path;
    }

    public function postVoidAuthorizationUrl($transactionId) {
        $path = sprintf('/oidc/api/%s/transactions/%s/void', $this->getVerifoneApiVersion(), $transactionId);

        return $this->settings->isTest() ? $this->envTestBasePaymentsUrl . $path : $this->envLiveBasePaymentsUrl . $path;
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
        return sprintf(('/oidc/api/%s/transactions/%s/refund'), $this->getVerifonePaymentsApiVersion(), $transactionId);
    }

    protected function getCustomerPartialPath()
    {
        return '/oidc/customer-service/' . $this->getVerifoneApiVersion() . '/customer';
    }

    protected function getCheckoutPartialPath()
    {
        return '/oidc/checkout-service/' . $this->getVerifoneApiVersion() . '/checkout';
    }
}