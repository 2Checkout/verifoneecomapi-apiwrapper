<?php

namespace VerifoneGreenbox\ApiWrapper\Authentication;

use VerifoneGreenbox\ApiWrapper\Authentication\Exceptions\AuthenticationException;
use VerifoneGreenbox\ApiWrapper\Authentication\Interfaces\AuthenticationInterface;
use VerifoneGreenbox\ApiWrapper\Http\HttpException;
use VerifoneGreenbox\ApiWrapper\Http\SimpleCurl;
use VerifoneGreenbox\ApiWrapper\Regions\AbstractRegion;
use VerifoneGreenbox\ApiWrapper\Settings;

class TokenGenerator implements AuthenticationInterface
{
    private $username;
    private $password;
    private $client_id;
    private $redirect_uri;
    private $codeChallenge;
    private $codeVerifier;
    private $base_url;

    /**
     * @var Settings
     */
    private $settings;

    /**
     * @var SimpleCurl
     */
    private $simpleCurl;

    /**
     * TokenGenerator constructor.
     * @param Settings $settings
     * @param AbstractRegion $api_mapper
     * @param SimpleCurl $simpleCurl
     */
    public function __construct(
        Settings $settings, AbstractRegion $region, SimpleCurl $simpleCurl
    )
    {
        $this->username = $settings->getApiUsername();
        $this->password = $settings->getApiPassword();
        $this->client_id = $settings->getApiClientId();
        $this->settings = $settings;
        $this->simpleCurl = $simpleCurl;
        $this->redirect_uri = $region->getTokenRedirectUrl();
        $this->base_url = $region->getTokenUrl();
        $this->codeVerifier = $this->generateCodeVerifier();
        $this->codeChallenge = $this->calculateCodeChallenge($this->codeVerifier);
    }

    /**
     * @return string
     * @throws AuthenticationException
     * @throws HttpException
     */
    public function getAuth()
    {
        return $this->createToken();
    }

    /**
     * @return string
     * @throws AuthenticationException
     * @throws HttpException
     */
    private function getAuthEndpointToken()
    {
        $sso_token = $this->simpleCurl
            ->setOpt(CURLOPT_URL, $this->getAuthEndpoint())
            ->setOpt(CURLOPT_POST, true)
            ->setOpt(CURLOPT_RETURNTRANSFER, true)
            ->setOpt(CURLOPT_HTTPHEADER, [
                'Content-Type: application/json',
                'X-OpenAM-Username: ' . $this->username,
                'X-OpenAM-Password: ' . $this->password,
                'Accept-API-Version:resource=2.0, protocol=1.0',
                'Content-Length:0'
            ]);

        if (!$this->settings->getCurlVerifySsl()) {
            $sso_token
                ->setOpt(CURLOPT_SSL_VERIFYHOST, false)
                ->setOpt(CURLOPT_SSL_VERIFYPEER, false);
        }

        $sso_token = $sso_token->getResult();

        $sso_token = json_decode($sso_token, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new AuthenticationException('There was an error in the application');
        }

        if (!isset($sso_token['tokenId'])) {
            throw new AuthenticationException('There was an error in the application');
        }

        return trim($sso_token['tokenId']);
    }

    /**
     * @return string
     * @throws AuthenticationException
     * @throws HttpException
     */
    private function getAuthzEndpointResponse()
    {
        $token = $this->getAuthEndpointToken();
        $postFields = sprintf("response_type=code&client_id=%s&csrf=%s&redirect_uri=%s&decision=allow&code_challenge=%s&code_challenge_method=%s", $this->client_id, $token, $this->redirect_uri, $this->codeChallenge, 'S256');

        $authCodeRequest = $this->simpleCurl
            ->setOpt(CURLOPT_URL, $this->getAuthzEndpoint())
            ->setOpt(CURLOPT_POST, true)
            ->setOpt(CURLOPT_RETURNTRANSFER, true)
            ->setOpt(CURLOPT_HEADER, true)
            ->setOpt(CURLOPT_POSTFIELDS, $postFields)
            ->setOpt(CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded'])
            ->setOpt(CURLOPT_COOKIE, 'verifoneAM' . '=' . $token);

        if (!$this->settings->getCurlVerifySsl()) {
            $authCodeRequest
                ->setOpt(CURLOPT_SSL_VERIFYHOST, false)
                ->setOpt(CURLOPT_SSL_VERIFYPEER, false);
        }

        $authCodeRequest = $authCodeRequest->getResult();

        $code_pos = strpos($authCodeRequest, '?code=');
        $iss_pos = strpos($authCodeRequest, '&iss=');
        $auth_code = substr($authCodeRequest, $code_pos + 6, ($iss_pos - $code_pos - 6));

        if (false === $code_pos || false === $iss_pos || false === $auth_code) {
            throw new AuthenticationException('There was an error in the application');
        }

        return $auth_code;
    }

    /**
     * @param $token
     * @param $property
     * @return mixed
     * @throws AuthenticationException
     */
    public function getTokenProperty($token, $property)
    {
        $decodedToken = $this->decode($token);
        if (!isset($decodedToken[$property])) {
            throw new AuthenticationException('There was an error in the application');
        }

        return $decodedToken[$property];
    }

    /**
     * @return mixed
     * @throws AuthenticationException
     */
    private function decode($token)
    {
        if (null === $token) {
            throw new AuthenticationException('Cannot decode a non-existing token. Generate the token first, then decode it.');
        }

        return json_decode(base64_decode(
            str_replace('_', '/',
                str_replace('-', '+',
                    explode('.', $token)[1])
            )
        ),
            true);
    }

    /**
     * @return string
     * @throws AuthenticationException
     * @throws HttpException
     */
    private function createToken()
    {
        $auth_code = $this->getAuthzEndpointResponse();

        $postFields = sprintf("grant_type=authorization_code&code=%s&client_id=%s&redirect_uri=%s&code_verifier=%s", $auth_code, $this->client_id, $this->redirect_uri, $this->codeVerifier);
        $accessToken = $this->simpleCurl
            ->setOpt(CURLOPT_URL, $this->getTokenEndpoint())
            ->setOpt(CURLOPT_RETURNTRANSFER, true)
            ->setOpt(CURLOPT_POST, true)
            ->setOpt(CURLOPT_POSTFIELDS, $postFields)
            ->setOpt(CURLOPT_HTTPHEADER, ['Content-Type: application/x-www-form-urlencoded']);

        if (!$this->settings->getCurlVerifySsl()) {
            $accessToken
                ->setOpt(CURLOPT_SSL_VERIFYHOST, false)
                ->setOpt(CURLOPT_SSL_VERIFYPEER, false);
        }

        $accessToken = $accessToken->getResult();

        $accessToken = json_decode($accessToken, true);
        if (json_last_error() !== JSON_ERROR_NONE) {
            throw new AuthenticationException('There was an error in the application');
        }

        if (!isset($accessToken['access_token'])) {
            throw new AuthenticationException('There was an error in the application');
        }

        return trim($accessToken['access_token']);
    }


    /**
     * @return string
     */
    private function getTokenEndpoint()
    {
        return sprintf('%s/oauth2/realms/root/realms/%s/access_token', $this->base_url, 'VerifoneUsers');
    }

    /**
     * @return string
     */
    private function getAuthEndpoint()
    {
        return sprintf('%s/json/realms/root/realms/%s/authenticate', $this->base_url, 'VerifoneUsers');
    }

    /**
     * @return string
     */
    private function getAuthzEndpoint()
    {
        return sprintf('%s/oauth2/realms/root/realms/%s/authorize', $this->base_url, 'VerifoneUsers');
    }

    /**
     * @return false|string
     */
    private function generateCodeVerifier()
    {
        // codeVerifier=$(openssl rand -base64 1200 | tr -dc 'a-zA-Z0-9' | fold -w 50 | head -n 1)
        $t = base64_encode(openssl_random_pseudo_bytes(1200));
        $q = '';
        for ($i = 0; $i < strlen($t); $i++) {
            if ((ord($t[$i]) > ord('a')
                    && ord($t[$i]) < ord('z'))
                || (ord($t[$i]) > ord('A')
                    && ord($t[$i]) < ord('Z'))
                || (ord($t[$i]) > ord('0')
                    && ord($t[$i]) < ord('9'))

            ) {
                $q .= $t[$i];
            }
        }

        return substr($q, 0, 50);
    }

    /**
     * @param $codeVerifier
     * @return array|string|string[]
     */
    private function calculateCodeChallenge($codeVerifier)
    {
        //Generate PKCE Challenge from Verifier and convert / + = characters"
        //codeChallenge=`echo -n ${codeVerifier} | shasum -a 256 | cut -d " " -f 1 | xxd -r -p | base64 | tr / _ | tr + - | tr -d =`

        $codeChallenge = base64_encode(hash('sha256', $codeVerifier, true));

        $codeChallenge = str_replace('+', '-', $codeChallenge);
        $codeChallenge = str_replace('/', '_', $codeChallenge);
        return str_replace('=', '', $codeChallenge);
    }
}