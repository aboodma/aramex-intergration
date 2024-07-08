<?php

namespace Aboodma\AramexIntegration\Models;

class Address
{
    public $Line1;
    public $Line2;
    public $Line3;
    public $City;
    public $StateOrProvinceCode;
    public $PostCode;
    public $CountryCode;
    public $longitude;
    public $latitude;
    public $buildingNumber;
    public $buildingName;
    public $floor;
    public $apartment;
    public $poBox;
    public $description;

    /**
     * Retrieves the first line of the address.
     *
     * @return string The first line of the address.
     */
    public function getLine1()
    {
        return $this->Line1;
    }

    /**
     * Sets the first line of the address.
     *
     * @param string $Line1 The first line of the address to set.
     * @return $this
     */
    public function setLine1($Line1)
    {
        $this->Line1 = $Line1;
        return $this;
    }

    /**
     * Retrieves the second line of the address.
     *
     * @return string The second line of the address.
     */
    public function getLine2()
    {
        return $this->Line2;
    }

    /**
     * Sets the second line of the address.
     *
     * @param string $Line2 The second line of the address to set.
     * @return $this
     */
    public function setLine2($Line2)
    {
        $this->Line2 = $Line2;
        return $this;
    }

    /**
     * Retrieves the third line of the address.
     *
     * @return string The third line of the address.
     */
    public function getLine3()
    {
        return $this->Line3;
    }

    /**
     * Sets the third line of the address.
     *
     * @param string $Line3 The third line of the address to set.
     * @return $this
     */
    public function setLine3($Line3)
    {
        $this->Line3 = $Line3;
        return $this;
    }

    /**
     * Retrieves the city of the address.
     *
     * @return string The city of the address.
     */
    public function getCity()
    {
        return $this->City;
    }

    /**
     * Sets the city of the address.
     *
     * @param string $City The city to set.
     * @return $this
     */
    public function setCity($City)
    {
        $this->City = $City;
        return $this;
    }

    /**
     * Retrieves the state or province code of the address.
     *
     * @return string The state or province code of the address.
     */
    public function getStateOrProvinceCode()
    {
        return $this->StateOrProvinceCode;
    }

    /**
     * Sets the state or province code of the address.
     *
     * @param string $StateOrProvinceCode The state or province code to set.
     * @return $this
     */
    public function setStateOrProvinceCode($StateOrProvinceCode)
    {
        $this->StateOrProvinceCode = $StateOrProvinceCode;
        return $this;
    }

    /**
     * Retrieves the postal code of the address.
     *
     * @return string The postal code of the address.
     */
    public function getPostCode()
    {
        return $this->PostCode;
    }

    /**
     * Sets the postal code of the address.
     *
     * @param string $PostCode The postal code to set.
     * @return $this
     */
    public function setPostCode($PostCode)
    {
        $this->PostCode = $PostCode;
        return $this;
    }

    /**
     * Retrieves the country code of the address.
     *
     * @return string The country code of the address.
     */
    public function getCountryCode()
    {
        return $this->CountryCode;
    }

    /**
     * Sets the country code of the address.
     *
     * @param string $CountryCode The country code to set.
     * @return $this
     */
    public function setCountryCode($CountryCode)
    {
        $this->CountryCode = $CountryCode;
        return $this;
    }

    /**
     * Retrieves the longitude of the address.
     *
     * @return float The longitude of the address.
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets the longitude of the address.
     *
     * @param float $Longitude The longitude to set.
     * @return $this
     */
    public function setLongitude($Longitude)
    {
        $this->longitude = $Longitude;
        return $this;
    }

    /**
     * Retrieves the latitude of the address.
     *
     * @return float The latitude of the address.
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets the latitude of the address.
     *
     * @param float $Latitude The latitude to set.
     * @return $this
     */
    public function setLatitude($Latitude)
    {
        $this->latitude = $Latitude;
        return $this;
    }

    /**
     * Retrieves the building number of the address.
     *
     * @return string The building number of the address.
     */
    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    /**
     * Sets the building number of the address.
     *
     * @param string $BuildingNumber The building number to set.
     * @return $this
     */
    public function setBuildingNumber($BuildingNumber)
    {
        $this->buildingNumber = $BuildingNumber;
        return $this;
    }

    /**
     * Retrieves the building name of the address.
     *
     * @return string The building name of the address.
     */
    public function getBuildingName()
    {
        return $this->buildingName;
    }

    /**
     * Sets the building name of the address.
     *
     * @param string $BuildingName The building name to set.
     * @return $this
     */
    public function setBuildingName($BuildingName)
    {
        $this->buildingName = $BuildingName;
        return $this;
    }

    /**
     * Retrieves the floor of the address.
     *
     * @return string The floor of the address.
     */
    public function getFloor()
    {
        return $this->floor;
    }

    /**
     * Sets the floor of the address.
     *
     * @param string $Floor The floor to set.
     * @return $this
     */
    public function setFloor($Floor)
    {
        $this->floor = $Floor;
        return $this;
    }

    /**
     * Retrieves the apartment number of the address.
     *
     * @return string The apartment number of the address.
     */
    public function getApartment()
    {
        return $this->apartment;
    }

    /**
     * Sets the apartment number of the address.
     *
     * @param string $Apartment The apartment number to set.
     * @return $this
     */
    public function setApartment($Apartment)
    {
        $this->apartment = $Apartment;
        return $this;
    }

    /**
     * Retrieves the P.O. box of the address.
     *
     * @return string The P.O. box of the address.
     */
    public function getPoBox()
    {
        return $this->poBox;
    }

    /**
     * Sets the P.O. box of the address.
     *
     * @param string $PoBox The P.O. box to set.
     * @return $this
     */
    public function setPoBox($PoBox)
    {
        $this->poBox = $PoBox;
        return $this;
    }

    /**
     * Retrieves the description of the address.
     *
     * @return string The description of the address.
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description of the address.
     *
     * @param string $Description The description to set.
     * @return $this
     */
    public function setDescription($Description)
    {
        $this->description = $Description;
        return $this;
    }
}
