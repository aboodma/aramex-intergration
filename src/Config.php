<?php

namespace Aboodma\AramexIntegration;

class Config
{
    private $Username;
    private $Password;
    private $Version;
    private $AccountNumber;
    private $AccountPin;
    private $AccountEntity;
    private $AccountCountryCode;
    private $Source;
    private $PreferredLanguageCode;

    /**
     * Retrieves the username.
     *
     * @return string The username.
     */
    public function getUsername()
    {
        return $this->Username;
    }

    /**
     * Sets the username.
     *
     * @param string $Username The username to set.
     * @return $this
     */
    public function setUsername($Username)
    {
        $this->Username = $Username;
        return $this;
    }

    /**
     * Retrieves the password.
     *
     * @return string The password.
     */
    public function getPassword()
    {
        return $this->Password;
    }

    /**
     * Sets the password.
     *
     * @param string $Password The password to set.
     * @return $this
     */
    public function setPassword($Password)
    {
        $this->Password = $Password;
        return $this;
    }

    /**
     * Retrieves the version.
     *
     * @return string The version.
     */
    public function getVersion()
    {
        return $this->Version;
    }

    /**
     * Sets the version.
     *
     * @param string $Version The version to set.
     * @return $this
     */
    public function setVersion($Version)
    {
        $this->Version = $Version;
        return $this;
    }

    /**
     * Retrieves the account number.
     *
     * @return string The account number.
     */
    public function getAccountNumber()
    {
        return $this->AccountNumber;
    }

    /**
     * Sets the account number.
     *
     * @param string $AccountNumber The account number to set.
     * @return $this
     */
    public function setAccountNumber($AccountNumber)
    {
        $this->AccountNumber = $AccountNumber;
        return $this;
    }

    /**
     * Retrieves the account PIN.
     *
     * @return string The account PIN.
     */
    public function getAccountPin()
    {
        return $this->AccountPin;
    }

    /**
     * Sets the account PIN.
     *
     * @param string $AccountPin The account PIN to set.
     * @return $this
     */
    public function setAccountPin($AccountPin)
    {
        $this->AccountPin = $AccountPin;
        return $this;
    }

    /**
     * Retrieves the account entity.
     *
     * @return string The account entity.
     */
    public function getAccountEntity()
    {
        return $this->AccountEntity;
    }

    /**
     * Sets the account entity.
     *
     * @param string $AccountEntity The account entity to set.
     * @return $this
     */
    public function setAccountEntity($AccountEntity)
    {
        $this->AccountEntity = $AccountEntity;
        return $this;
    }

    /**
     * Retrieves the account country code.
     *
     * @return string The account country code.
     */
    public function getAccountCountryCode()
    {
        return $this->AccountCountryCode;
    }

    /**
     * Sets the account country code.
     *
     * @param string $AccountCountryCode The account country code to set.
     * @return $this
     */
    public function setAccountCountryCode($AccountCountryCode)
    {
        $this->AccountCountryCode = $AccountCountryCode;
        return $this;
    }

    /**
     * Retrieves the source.
     *
     * @return string The source.
     */
    public function getSource()
    {
        return $this->Source;
    }

    /**
     * Sets the source.
     *
     * @param string $Source The source to set.
     * @return $this
     */
    public function setSource($Source)
    {
        $this->Source = $Source;
        return $this;
    }

    /**
     * Retrieves the preferred language code.
     *
     * @return string The preferred language code.
     */
    public function getPreferredLanguageCode()
    {
        return $this->PreferredLanguageCode;
    }

    /**
     * Sets the preferred language code.
     *
     * @param string $PreferredLanguageCode The preferred language code to set.
     * @return $this
     */
    public function setPreferredLanguageCode($PreferredLanguageCode)
    {
        $this->PreferredLanguageCode = $PreferredLanguageCode;
        return $this;
    }
}
