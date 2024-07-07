<?php

namespace Aboodma\AramexIntegration\Models;
class Contact
{
    private $department;
    private $personName;
    private $title;
    private $companyName;
    private $phoneNumber1;
    private $phoneNumber1Ext;
    private $phoneNumber2;
    private $phoneNumber2Ext;
    private $faxNumber;
    private $cellPhone;
    private $emailAddress;
    private $type;

    public function getDepartment()
    {
        return $this->department;
    }

    public function setDepartment($department)
    {
        $this->department = $department;
    }

    public function getPersonName()
    {
        return $this->personName;
    }

    public function setPersonName($personName)
    {
        $this->personName = $personName;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getCompanyName()
    {
        return $this->companyName;
    }

    public function setCompanyName($companyName)
    {
        $this->companyName = $companyName;
    }

    public function getPhoneNumber1()
    {
        return $this->phoneNumber1;
    }

    public function setPhoneNumber1($phoneNumber1)
    {
        $this->phoneNumber1 = $phoneNumber1;
    }

    public function getPhoneNumber1Ext()
    {
        return $this->phoneNumber1Ext;
    }

    public function setPhoneNumber1Ext($phoneNumber1Ext)
    {
        $this->phoneNumber1Ext = $phoneNumber1Ext;
    }

    public function getPhoneNumber2()
    {
        return $this->phoneNumber2;
    }

    public function setPhoneNumber2($phoneNumber2)
    {
        $this->phoneNumber2 = $phoneNumber2;
    }

    public function getPhoneNumber2Ext()
    {
        return $this->phoneNumber2Ext;
    }

    public function setPhoneNumber2Ext($phoneNumber2Ext)
    {
        $this->phoneNumber2Ext = $phoneNumber2Ext;
    }

    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
    }

    public function getCellPhone()
    {
        return $this->cellPhone;
    }

    public function setCellPhone($cellPhone)
    {
        $this->cellPhone = $cellPhone;
    }

    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }
}
