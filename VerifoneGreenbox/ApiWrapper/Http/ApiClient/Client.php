<?php

namespace VerifoneGreenbox\ApiWrapper\Http\ApiClient;

use VerifoneGreenbox\ApiWrapper\Authentication\Interfaces\AuthenticationInterface;
use VerifoneGreenbox\ApiWrapper\Http\HttpException;
use VerifoneGreenbox\ApiWrapper\Http\SimpleCurl;
use VerifoneGreenbox\ApiWrapper\Regions\AbstractRegion;
use VerifoneGreenbox\ApiWrapper\Schemas\SchemaInterface;
use VerifoneGreenbox\ApiWrapper\Settings;
use VerifoneGreenbox\ApiWrapper\Validators\Validator;

/**
 * Class Client
 * @package VerifoneGreenbox\ApiWrapper\Http\ApiClient
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
     */
    public function __construct(AbstractRegion $region, Settings $settings, AuthenticationInterface $authentication)
    {
        $this->region = $region;
        $this->authentication = $authentication;
        $this->settings = $settings;
        $this->simpleCurl = new SimpleCurl();
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
            ->setOpt(CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $this->token,
            ]);
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
            ->setOpt(CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $this->token,
            ]);
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
            ->setOpt(CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $this->token,
            ]);
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
            ->setOpt(CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'Authorization: Bearer ' . $this->token,
            ]);
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
     * @param $schema
     * @param $payload
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