<?php

namespace VerifoneApi\ApiWrapper\Http\ApiClient;

use VerifoneApi\ApiWrapper\Authentication\Interfaces\AuthenticationInterface;
use VerifoneApi\ApiWrapper\Http\HttpException;
use VerifoneApi\ApiWrapper\Http\SimpleCurl;
use VerifoneApi\ApiWrapper\Regions\AbstractRegion;
use VerifoneApi\ApiWrapper\Schemas\SchemaInterface;
use VerifoneApi\ApiWrapper\Settings;
use VerifoneApi\ApiWrapper\Validators\Validator;

/**
 * Class Client
 * @package VerifoneApi\ApiWrapper\Http\ApiClient
 */
class Client
{

    private $region;
    private $simpleCurl;
    private $settings;
    private $authentication;
    private $token;

    /**
     * Client constructor.
     * @param AbstractRegion $region
     * @param Settings $settings
     * @param AuthenticationInterface $authentication
     * @param SimpleCurl $simpleCurl
     */
    public function __construct(
        AbstractRegion $region,
        Settings $settings,
        AuthenticationInterface $authentication,
        SimpleCurl $simpleCurl
    )
    {
        $this->region = $region;
        $this->authentication = $authentication;
        $this->settings = $settings;
        $this->simpleCurl = $simpleCurl;
        $this->token = $this->authentication->getAuth();
    }

    /**
     * @param array $payload
     * @param SchemaInterface|null $schema
     * @return mixed
     * @throws HttpException
     */
    public function postCustomer(array $payload, SchemaInterface $schema = null)
    {
        $this->validateSchema($schema, $payload);

        $result = $this->simpleCurl->setOpt(CURLOPT_URL, $this->region->postCustomerUrl())
            ->setOpt(CURLOPT_RETURNTRANSFER, true)
            ->setOpt(CURLOPT_POST, true)
            ->setOpt(CURLOPT_POSTFIELDS, json_encode($payload))
            ->setOpt(CURLOPT_HTTPHEADER, $this->getHeaders());
        $this->addSsl($result);

        return $this->decodeResult($result->getResult());
    }

    /**
     * @param array $payload
     * @param SchemaInterface|null $schema
     * @return mixed
     * @throws HttpException
     */
    public function postCheckout(array $payload, SchemaInterface $schema = null)
    {
        $this->validateSchema($schema, $payload);

        $result = $this->simpleCurl->setOpt(CURLOPT_URL, $this->region->postCheckoutUrl())
            ->setOpt(CURLOPT_RETURNTRANSFER, true)
            ->setOpt(CURLOPT_POST, true)
            ->setOpt(CURLOPT_POSTFIELDS, json_encode($payload))
            ->setOpt(CURLOPT_HTTPHEADER, $this->getHeaders());
        $this->addSsl($result);

        return $this->decodeResult($result->getResult());
    }

    /**
     * @param array $payload
     * @param $transactionId
     * @param SchemaInterface|null $schema
     * @return mixed
     * @throws HttpException
     */
    public function postRefund(array $payload, $transactionId, SchemaInterface $schema = null)
    {
        $this->validateSchema($schema, $payload);

        $result = $this->simpleCurl->setOpt(CURLOPT_URL, $this->region->getRefundUrl($transactionId))
            ->setOpt(CURLOPT_RETURNTRANSFER, true)
            ->setOpt(CURLOPT_POST, true)
            ->setOpt(CURLOPT_POSTFIELDS, json_encode($payload))
            ->setOpt(CURLOPT_HTTPHEADER, $this->getHeaders());
        $this->addSsl($result);

        return $this->decodeResult($result->getResult());
    }

    /**
     * @param $checkoutId
     * @return mixed
     * @throws HttpException
     */
    public function getCheckout($checkoutId)
    {
        $result = $this->simpleCurl->setOpt(CURLOPT_URL, $this->region->getCheckoutUrl($checkoutId))
            ->setOpt(CURLOPT_RETURNTRANSFER, true)
            ->setOpt(CURLOPT_HTTPHEADER, $this->getHeaders());
        $this->addSsl($result);

        return $this->decodeResult($result->getResult());
    }

    /**
     * @param $client
     */
    private function addSsl($client) {
        if (!$this->settings->getCurlVerifySsl()) {
            $client->setOpt(CURLOPT_SSL_VERIFYHOST, false)
                ->setOpt(CURLOPT_SSL_VERIFYPEER, false);
        }
    }

    /**
     * @return string[]
     */
    private function getHeaders() {
        return  [
            'Content-Type: application/json',
            'Authorization: Bearer ' . $this->token,
        ];
    }

    /**
     * @param $schema
     * @param $payload
     * @throws \Exception
     */
    private function validateSchema($schema, $payload)
    {
        if (null !== $schema) {
            (new Validator())->validate(new $schema, $payload);
        }
    }

    /**
     * @param $result
     * @return mixed
     * @throws HttpException
     */
    private function decodeResult($result)
    {
        $result = json_decode($result, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new HttpException('Unable to decode response from API');
        }

        return $result;
    }
}