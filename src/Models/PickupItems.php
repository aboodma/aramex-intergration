<?php

namespace Aboodma\AramexIntegration\Models;

use Aboodma\AramexIntegration\Models\Weight;

class PickupItems
{
    public $ProductGroup;
    public $ProductType;
    public $NumberOfShipments;
    public $PackageType;
    public $Payment;
    public $ShipmentWeight;
    public $ShipmentVolume;
    public $NumberOfPieces;
    public $CashAmount;
    public $ExtraCharges;
    public $ShipmentDimensions;
    public $Comments;
    

    //Setters with chaining Method

    public function setProductGroup($ProductGroup)
    {
        $this->ProductGroup = $ProductGroup;
        return $this;
    }
    public function setProductType($ProductType)
    {
        $this->ProductType = $ProductType;
        return $this;
    }
    public function setNumberOfShipments($NumberOfShipments)
    {
        $this->NumberOfShipments = $NumberOfShipments;
        return $this;
    }
    public function setPackageType($PackageType)
    {
        $this->PackageType = $PackageType;
        return $this;
    }
    public function setPayment($Payment)
    {
        $this->Payment = $Payment;
        return $this;
    }
    public function setShipmentWeight(Weight $ShipmentWeight)
    {
        $this->ShipmentWeight = $ShipmentWeight;
        return $this;
    }
    public function setShipmentVolume($ShipmentVolume)
    {
        $this->ShipmentVolume = $ShipmentVolume;
        return $this;
    }
    public function setNumberOfPieces($NumberOfPieces)
    {
        $this->NumberOfPieces = $NumberOfPieces;
        return $this;
    }
    public function setCashAmount($CashAmount)
    {
        $this->CashAmount = $CashAmount;
        return $this;
    }
    public function setExtraCharges($ExtraCharges)
    {
        $this->ExtraCharges = $ExtraCharges;
        return $this;
    }
    public function setShipmentDimensions(Dimensions $ShipmentDimensions)
    {
        $this->ShipmentDimensions = $ShipmentDimensions;
        return $this;
    }
    public function setComments($Comments)
    {
        $this->Comments = $Comments;
        return $this;
    }
    
}