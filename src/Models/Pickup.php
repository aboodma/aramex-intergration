<?php

namespace Aboodma\AramexIntegration\Models;

use Aboodma\AramexIntegration\Models\Address;

class Pickup
{

    public $PickupAddress;

    public $PickupContact;

    public $PickupLocation;

    public $PickupDate;

    public $ReadyTime;

    public $LastPickupTime;

    public $ClosingTime;

    public $Comments;

    public $Reference1;

    public $Reference2;

    public $Vehicle;

    public $Shipments;

    public $PickupItems;

    public $Status;

    public $ExistingShipments;

    public $Branch;

    public $RouteCode;


    //Getters And Setters with chaining Method
    public function setPickupAddress(Address $pickupAddress)
    {
        $this->PickupAddress = $pickupAddress;
        return $this;
    }

    public function setPickupContact(Contact $pickupContact)
    {
        $this->PickupContact = $pickupContact;
        return $this;
    }

    public function setPickupLocation($pickupLocation)
    {
        $this->PickupLocation = $pickupLocation;
        return $this;
    }

    public function setPickupDate($pickupDate)
    {
        $this->PickupDate = $pickupDate;
        return $this;
    }

    public function setReadyTime($readyTime)
    {
        $this->ReadyTime = $readyTime;
        return $this;
    }

    public function setLastPickupTime($lastPickupTime)
    {
        $this->LastPickupTime = $lastPickupTime;
        return $this;
    }

    public function setClosingTime($closingTime)
    {
        $this->ClosingTime = $closingTime;
        return $this;
    }

    public function setComments($comments)
    {
        $this->Comments = $comments;
        return $this;
    }

    public function setReference1($reference1)
    {
        $this->Reference1 = $reference1;
        return $this;
    }

    public function setReference2($reference2)
    {
        $this->Reference2 = $reference2;
        return $this;
    }

    public function setVehicle($vehicle)
    {
        $this->Vehicle = $vehicle;
        return $this;
    }

    public function setShipments($shipments)
    {
        $this->Shipments = $shipments;
        return $this;
    }

    public function setPickupItems(array $pickupItems)
    {
        $this->PickupItems = $pickupItems;
        return $this;
    }

    public function setStatus($status)
    {
        $this->Status = $status;
        return $this;
    }

    public function setExistingShipments($existingShipments)
    {
        $this->ExistingShipments = $existingShipments;
        return $this;
    }

    public function setBranch($branch)
    {
        $this->Branch = $branch;
        return $this;
    }

    public function setRouteCode($routeCode)
    {
        $this->RouteCode = $routeCode;
        return $this;
    }






}