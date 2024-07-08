<?php

namespace Aboodma\AramexIntegration\Models;

class Party
{
    public $reference1;
    public $reference2;
    public $accountNumber;
    public $partyAddress;
    public $contact;

 
    public function getReference1()
    {
        return $this->reference1;
    }

    public function setReference1($reference1)
    {
        $this->reference1 = $reference1;
    }

    public function getReference2()
    {
        return $this->reference2;
    }

    public function setReference2($reference2)
    {
        $this->reference2 = $reference2;
    }

    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

    public function setAccountNumber($accountNumber)
    {
        $this->accountNumber = $accountNumber;
    }

    public function getPartyAddress()
    {
        return $this->partyAddress;
    }

    public function setPartyAddress(Address $partyAddress)
    {
        $this->partyAddress = $partyAddress;
    }

    public function getContact()
    {
        return $this->contact;
    }

    public function setContact(Contact $contact)
    {
        $this->contact = $contact;
    }
}
