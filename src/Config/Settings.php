<?php

namespace Galilee\PPM\SDK\DPS;

/**
 * Class Settings
 */
class Settings
{
    // API Endpoints
    /** @var  string */
    private $producerEndpoint;
    /** @var  string */
    private $authenticationEndpoint;
    /** @var  string */
    private $authorizationEndpoint;
    /** @var  string */
    private $ingestionEndpoint;
    /** @var  string */
    private $productEndpoint;

    // Crendentials for API
    /** @var  string */
    private $clientAppId;
    /** @var  string */
    private $clientId;
    /** @var  string */
    private $clientSecret;
    /** @var  string */
    private $clientVersion;
    /** @var  string */
    private $apiKey;
    /** @var  string */
    private $refreshToken;
    /** @var  string */
    private $accessToken;
    /** @var  string */
    private $deviceToken;
    /** @var  string */
    private $deviceId;
    /** @var  string */
    private $requestId;
    /** @var  string */
    private $sessionId;

    /*
     * Getters / Setters
     */

    /**
     * @return string
     */
    public function getProducerEndpoint()
    {
        return $this->producerEndpoint;
    }

    /**
     * @param string $producerEndpoint
     */
    public function setProducerEndpoint($producerEndpoint)
    {
        $this->producerEndpoint = $producerEndpoint;
    }

    /**
     * @return string
     */
    public function getAuthenticationEndpoint()
    {
        return $this->authenticationEndpoint;
    }

    /**
     * @param string $authenticationEndpoint
     */
    public function setAuthenticationEndpoint($authenticationEndpoint)
    {
        $this->authenticationEndpoint = $authenticationEndpoint;
    }

    /**
     * @return string
     */
    public function getAuthorizationEndpoint()
    {
        return $this->authorizationEndpoint;
    }

    /**
     * @param string $authorizationEndpoint
     */
    public function setAuthorizationEndpoint($authorizationEndpoint)
    {
        $this->authorizationEndpoint = $authorizationEndpoint;
    }

    /**
     * @return string
     */
    public function getIngestionEndpoint()
    {
        return $this->ingestionEndpoint;
    }

    /**
     * @param string $ingestionEndpoint
     */
    public function setIngestionEndpoint($ingestionEndpoint)
    {
        $this->ingestionEndpoint = $ingestionEndpoint;
    }

    /**
     * @return string
     */
    public function getProductEndpoint()
    {
        return $this->productEndpoint;
    }

    /**
     * @param string $productEndpoint
     */
    public function setProductEndpoint($productEndpoint)
    {
        $this->productEndpoint = $productEndpoint;
    }

    /**
     * @return string
     */
    public function getClientAppId()
    {
        return $this->clientAppId;
    }

    /**
     * @param string $clientAppId
     */
    public function setClientAppId($clientAppId)
    {
        $this->clientAppId = $clientAppId;
    }

    /**
     * @return string
     */
    public function getClientId()
    {
        return $this->clientId;
    }

    /**
     * @param string $clientId
     */
    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    /**
     * @return string
     */
    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    /**
     * @param string $clientSecret
     */
    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;
    }

    /**
     * @return string
     */
    public function getClientVersion()
    {
        return $this->clientVersion;
    }

    /**
     * @param string $clientVersion
     */
    public function setClientVersion($clientVersion)
    {
        $this->clientVersion = $clientVersion;
    }

    /**
     * @return string
     */
    public function getApiKey()
    {
        return $this->apiKey;
    }

    /**
     * @param string $apiKey
     */
    public function setApiKey($apiKey)
    {
        $this->apiKey = $apiKey;
    }

    /**
     * @return string
     */
    public function getRefreshToken()
    {
        return $this->refreshToken;
    }

    /**
     * @param string $refreshToken
     */
    public function setRefreshToken($refreshToken)
    {
        $this->refreshToken = $refreshToken;
    }

    /**
     * @return string
     */
    public function getAccessToken()
    {
        return $this->accessToken;
    }

    /**
     * @param string $accessToken
     */
    public function setAccessToken($accessToken)
    {
        $this->accessToken = $accessToken;
    }

    /**
     * @return string
     */
    public function getDeviceToken()
    {
        return $this->deviceToken;
    }

    /**
     * @param string $deviceToken
     */
    public function setDeviceToken($deviceToken)
    {
        $this->deviceToken = $deviceToken;
    }

    /**
     * @return string
     */
    public function getDeviceId()
    {
        return $this->deviceId;
    }

    /**
     * @param string $deviceId
     */
    public function setDeviceId($deviceId)
    {
        $this->deviceId = $deviceId;
    }

    /**
     * @return string
     */
    public function getRequestId()
    {
        return $this->requestId;
    }

    /**
     * @param string $requestId
     */
    public function setRequestId($requestId)
    {
        $this->requestId = $requestId;
    }

    /**
     * @return string
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }

    /**
     * @param string $sessionId
     */
    public function setSessionId($sessionId)
    {
        $this->sessionId = $sessionId;
    }
}