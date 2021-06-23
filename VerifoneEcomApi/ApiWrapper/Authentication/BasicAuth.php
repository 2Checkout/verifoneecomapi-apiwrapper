<?php

namespace VerifoneEcomAPI\ApiWrapper\Authentication;

use VerifoneEcomAPI\ApiWrapper\Authentication\Interfaces\AuthenticationInterface;
use VerifoneEcomAPI\ApiWrapper\Settings;

class BasicAuth implements AuthenticationInterface
{
    private $settings;

    /**
     * BasicAuth constructor.
     * @param Settings $settings
     */
    public function __construct(Settings $settings){
        $this->settings = $settings;
    }

    /**
     * @return string
     */
    public function getAuth()
    {
        // `Authorization: Basic [base64 encoded username:password]`
        return base64_encode($this->settings->getApiUserId().':'.$this->settings->getApiKey());
    }
}