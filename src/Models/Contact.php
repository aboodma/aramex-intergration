<?php

namespace Aboodma\AramexIntegration\Models;

class Contact
{
    public $department;
    public $PersonName;
    public $Title;
    public $CompanyName;
    public $PhoneNumber1;
    public $phoneNumber1Ext;
    public $PhoneNumber2;
    public $phoneNumber2Ext;
    public $faxNumber;
    public $CellPhone;
    public $emailAddress;
    public $Type;

    /**
     * Retrieves the department.
     *
     * @return string The department.
     */
    public function getDepartment()
    {
        return $this->department;
    }

    /**
     * Sets the department.
     *
     * @param string $department The department to set.
     * @return $this
     */
    public function setDepartment($department)
    {
        $this->department = $department;
        return $this;
    }

    /**
     * Retrieves the person's name.
     *
     * @return string The person's name.
     */
    public function getPersonName()
    {
        return $this->PersonName;
    }

    /**
     * Sets the person's name.
     *
     * @param string $personName The person's name to set.
     * @return $this
     */
    public function setPersonName($personName)
    {
        $this->PersonName = $personName;
        return $this;
    }

    /**
     * Retrieves the title.
     *
     * @return string The title.
     */
    public function getTitle()
    {
        return $this->Title;
    }

    /**
     * Sets the title.
     *
     * @param string $title The title to set.
     * @return $this
     */
    public function setTitle($title)
    {
        $this->Title = $title;
        return $this;
    }

    /**
     * Retrieves the company name.
     *
     * @return string The company name.
     */
    public function getCompanyName()
    {
        return $this->CompanyName;
    }

    /**
     * Sets the company name.
     *
     * @param string $companyName The company name to set.
     * @return $this
     */
    public function setCompanyName($companyName)
    {
        $this->CompanyName = $companyName;
        return $this;
    }

    /**
     * Retrieves the primary phone number.
     *
     * @return string The primary phone number.
     */
    public function getPhoneNumber1()
    {
        return $this->PhoneNumber1;
    }

    /**
     * Sets the primary phone number.
     *
     * @param string $phoneNumber1 The primary phone number to set.
     * @return $this
     */
    public function setPhoneNumber1($phoneNumber1)
    {
        $this->PhoneNumber1 = $phoneNumber1;
        return $this;
    }

    /**
     * Retrieves the extension for the primary phone number.
     *
     * @return string The extension for the primary phone number.
     */
    public function getPhoneNumber1Ext()
    {
        return $this->phoneNumber1Ext;
    }

    /**
     * Sets the extension for the primary phone number.
     *
     * @param string $phoneNumber1Ext The extension for the primary phone number to set.
     * @return $this
     */
    public function setPhoneNumber1Ext($phoneNumber1Ext)
    {
        $this->phoneNumber1Ext = $phoneNumber1Ext;
        return $this;
    }

    /**
     * Retrieves the secondary phone number.
     *
     * @return string The secondary phone number.
     */
    public function getPhoneNumber2()
    {
        return $this->PhoneNumber2;
    }

    /**
     * Sets the secondary phone number.
     *
     * @param string $phoneNumber2 The secondary phone number to set.
     * @return $this
     */
    public function setPhoneNumber2($phoneNumber2)
    {
        $this->PhoneNumber2 = $phoneNumber2;
        return $this;
    }

    /**
     * Retrieves the extension for the secondary phone number.
     *
     * @return string The extension for the secondary phone number.
     */
    public function getPhoneNumber2Ext()
    {
        return $this->phoneNumber2Ext;
    }

    /**
     * Sets the extension for the secondary phone number.
     *
     * @param string $phoneNumber2Ext The extension for the secondary phone number to set.
     * @return $this
     */
    public function setPhoneNumber2Ext($phoneNumber2Ext)
    {
        $this->phoneNumber2Ext = $phoneNumber2Ext;
        return $this;
    }

    /**
     * Retrieves the fax number.
     *
     * @return string The fax number.
     */
    public function getFaxNumber()
    {
        return $this->faxNumber;
    }

    /**
     * Sets the fax number.
     *
     * @param string $faxNumber The fax number to set.
     * @return $this
     */
    public function setFaxNumber($faxNumber)
    {
        $this->faxNumber = $faxNumber;
        return $this;
    }

    /**
     * Retrieves the cell phone number.
     *
     * @return string The cell phone number.
     */
    public function getCellPhone()
    {
        return $this->CellPhone;
    }

    /**
     * Sets the cell phone number.
     *
     * @param string $cellPhone The cell phone number to set.
     * @return $this
     */
    public function setCellPhone($cellPhone)
    {
        $this->CellPhone = $cellPhone;
        return $this;
    }

    /**
     * Retrieves the email address.
     *
     * @return string The email address.
     */
    public function getEmailAddress()
    {
        return $this->emailAddress;
    }

    /**
     * Sets the email address.
     *
     * @param string $emailAddress The email address to set.
     * @return $this
     */
    public function setEmailAddress($emailAddress)
    {
        $this->emailAddress = $emailAddress;
        return $this;
    }

    /**
     * Retrieves the type of contact.
     *
     * @return string The type of contact.
     */
    public function getType()
    {
        return $this->Type;
    }

    /**
     * Sets the type of contact.
     *
     * @param string $type The type of contact to set.
     * @return $this
     */
    public function setType($type)
    {
        $this->Type = $type;
        return $this;
    }
}
