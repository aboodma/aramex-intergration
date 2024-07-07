<?php

namespace Aboodma\AramexIntegration;

class Config
{
    private $username;
    private $password;
    private $version;
    private $accountNumber;
    private $accountPin;
    private $accountEntity;
    private $accountCountryCode;
    private $source;
    private $preferredLanguageCode;

    // Getters and setters for each property

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username) 
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getVersion()
    {
        return $this->version;
    }

    public function setVersion($version)
    {
        $this->version = $version;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    public function getAccountPin()
    {
        return $this->accountPin;
    }

    public function setAccountPin($accountPin)
    {
        $this->accountPin = $accountPin;
    }

    public function getAccountEntity()
    {
        return $this->accountEntity;
    }

    public function setAccountEntity($accountEntity)
    {
        $this->accountEntity = $accountEntity;
    }

    public function getAccountCountryCode()
    {
        return $this->accountCountryCode;
    }

    public function setAccountCountryCode($accountCountryCode)
    {
        $this->accountCountryCode = $accountCountryCode;
    }   

    public function getSource()
    {
        return $this->source;
    }

    public function setSource($source)
    {
        $this->source = $source;
    }

    public function getPreferredLanguageCode()  
    {
        return $this->preferredLanguageCode;
    }

    public function setPreferredLanguageCode($preferredLanguageCode)
    {
        $this->preferredLanguageCode = $preferredLanguageCode;
    }
}