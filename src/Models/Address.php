<?php

namespace Aboodma\AramexIntegration\Models;

class Address
{
    private $line1;
    private $line2;
    private $line3;
    private $city;
    private $stateOrProvinceCode;
    private $postCode;
    private $countryCode;
    private $longitude;
    private $latitude;
    private $buildingNumber;
    private $buildingName;
    private $floor;
    private $apartment;
    private $poBox;
    private $description;

    public function getLine1()
    {
        return $this->line1;
    }

    public function setLine1($line1)
    {
        $this->line1 = $line1;
        return $this;
    }

    public function getLine2()
    {
        return $this->line2;
    }

    public function setLine2($line2)
    {
        $this->line2 = $line2;
        return $this;
    }

    public function getLine3()
    {
        return $this->line3;
    }

    public function setLine3($line3)
    {
        $this->line3 = $line3;
        return $this;
    }

    public function getCity()
    {
        return $this->city;
    }

    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    public function getStateOrProvinceCode()
    {
        return $this->stateOrProvinceCode;
    }

    public function setStateOrProvinceCode($stateOrProvinceCode)
    {
        $this->stateOrProvinceCode = $stateOrProvinceCode;
        return $this;
    }

    public function getPostCode()
    {
        return $this->postCode;
    }

    public function setPostCode($postCode)
    {
        $this->postCode = $postCode;
        return $this;
    }

    public function getCountryCode()
    {
        return $this->countryCode;
    }

    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    public function getLongitude()
    {
        return $this->longitude;
    }

    public function setLongitude($longitude)
    {
        $this->longitude = $longitude;
        return $this;
    }

    public function getLatitude()
    {
        return $this->latitude;
    }

    public function setLatitude($latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    public function getBuildingNumber()
    {
        return $this->buildingNumber;
    }

    public function setBuildingNumber($buildingNumber)
    {
        $this->buildingNumber = $buildingNumber;
        return $this;
    }

    public function getBuildingName()
    {
        return $this->buildingName;
    }

    public function setBuildingName($buildingName)
    {
        $this->buildingName = $buildingName;
        return $this;
    }

    public function getFloor()
    {
        return $this->floor;
    }

    public function setFloor($floor)
    {
        $this->floor = $floor;
        return $this;
    }

    public function getApartment()
    {
        return $this->apartment;
    }

    public function setApartment($apartment)
    {
        $this->apartment = $apartment;
        return $this;
    }

    public function getPoBox()
    {
        return $this->poBox;
    }

    public function setPoBox($poBox)
    {
        $this->poBox = $poBox;
        return $this;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }
}
