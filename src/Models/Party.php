<?php

namespace Aboodma\AramexIntegration\Models;

class Party
{
    public $reference1;
    public $reference2;
    public $AccountNumber;
    public $PartyAddress;
    public $Contact;

    /**
     * Retrieves the first reference.
     *
     * @return string The first reference.
     */
    public function getReference1()
    {
        return $this->reference1;
    }

    /**
     * Sets the first reference.
     *
     * @param string $reference1 The first reference to set.
     * @return $this
     */
    public function setReference1($reference1)
    {
        $this->reference1 = $reference1;
        return $this;
    }

    /**
     * Retrieves the second reference.
     *
     * @return string The second reference.
     */
    public function getReference2()
    {
        return $this->reference2;
    }

    /**
     * Sets the second reference.
     *
     * @param string $reference2 The second reference to set.
     * @return $this
     */
    public function setReference2($reference2)
    {
        $this->reference2 = $reference2;
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
     * @param string $accountNumber The account number to set.
     * @return $this
     */
    public function setAccountNumber($accountNumber)
    {
        $this->AccountNumber = $accountNumber;
        return $this;
    }

    /**
     * Retrieves the party address.
     *
     * @return Address The party address.
     */
    public function getPartyAddress()
    {
        return $this->PartyAddress;
    }

    /**
     * Sets the party address.
     *
     * @param Address $partyAddress The party address to set.
     * @return $this
     */
    public function setPartyAddress(Address $partyAddress)
    {
        $this->PartyAddress = $partyAddress;
        return $this;
    }

    /**
     * Retrieves the contact information.
     *
     * @return Contact The contact information.
     */
    public function getContact()
    {
        return $this->Contact;
    }

    /**
     * Sets the contact information.
     *
     * @param Contact $contact The contact information to set.
     * @return $this
     */
    public function setContact(Contact $contact)
    {
        $this->Contact = $contact;
        return $this;
    }
}
