<?php

namespace Aboodma\AramexIntegration\Models;

class ClientInfo
{
    public $userName;
    public $password;
    public $version;
    public $accountNumber;
    public $accountPin;
    public $accountEntity;
    public $accountCountryCode;
    public $source;
    public $preferredLanguageCode;

    public function getUserName() { return $this->userName; }
    public function setUserName($userName) { $this->userName = $userName; }

    public function getPassword() { return $this->password; }
    public function setPassword($password) { $this->password = $password; }

    public function getVersion() { return $this->version; }
    public function setVersion($version) { $this->version = $version; }

    public function getAccountNumber() { return $this->accountNumber; }
    public function setAccountNumber($accountNumber) { $this->accountNumber = $accountNumber; }

    public function getAccountPin() { return $this->accountPin; }
    public function setAccountPin($accountPin) { $this->accountPin = $accountPin; }

    public function getAccountEntity() { return $this->accountEntity; }
    public function setAccountEntity($accountEntity) { $this->accountEntity = $accountEntity; }

    public function getAccountCountryCode() { return $this->accountCountryCode; }
    public function setAccountCountryCode($accountCountryCode) { $this->accountCountryCode = $accountCountryCode; }

    public function getSource() { return $this->source; }
    public function setSource($source) { $this->source = $source; }

    public function getPreferredLanguageCode() { return $this->preferredLanguageCode; }
    public function setPreferredLanguageCode($preferredLanguageCode) { $this->preferredLanguageCode = $preferredLanguageCode; }
}
