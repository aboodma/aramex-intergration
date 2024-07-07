<?php

namespace Aboodma\AramexIntegration\Models;

class Shipment
{
    private $reference1;
    private $reference2;
    private $reference3;
    private $shipper;
    private $consignee;
    private $thirdParty;
    private $shippingDateTime;
    private $dueDate;
    private $comments;
    private $pickupLocation;
    private $operationsInstructions;
    private $accountingInstructions;
    private $details;
    private $attachments;
    private $foreignHAWB;
    private $transportType;
    private $pickupGUID;
    private $number;
    private $scheduledDelivery;

    /**
     * Constructor for the Shipment class.
     *
     * @param Party $shipper The shipper party object.
     * @param Party $consignee The consignee party object.
     * @param ShipmentDetails $details The shipment details object.
     */
    public function __construct(Party $shipper, Party $consignee, ShipmentDetails $details)
    {
        $this->shipper = $shipper;
        $this->consignee = $consignee;
        $this->details = $details;
    }

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

    public function getReference3()
    {
        return $this->reference3;
    }

    public function setReference3($reference3)
    {
        $this->reference3 = $reference3;
    }

    public function getShipper()
    {
        return $this->shipper;
    }

    public function setShipper(Party $shipper)
    {
        $this->shipper = $shipper;
    }

    public function getConsignee()
    {
        return $this->consignee;
    }

    public function setConsignee(Party $consignee)
    {
        $this->consignee = $consignee;
    }

    public function getThirdParty()
    {
        return $this->thirdParty;
    }

    public function setThirdParty($thirdParty)
    {
        $this->thirdParty = $thirdParty;
    }

    public function getShippingDateTime()
    {
        return $this->shippingDateTime;
    }

    public function setShippingDateTime($shippingDateTime)
    {
        $this->shippingDateTime = $shippingDateTime;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate($dueDate)
    {
        $this->dueDate = $dueDate;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function setComments($comments)
    {
        $this->comments = $comments;
    }

    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }

    public function setPickupLocation($pickupLocation)
    {
        $this->pickupLocation = $pickupLocation;
    }

    public function getOperationsInstructions()
    {
        return $this->operationsInstructions;
    }

    public function setOperationsInstructions($operationsInstructions)
    {
        $this->operationsInstructions = $operationsInstructions;
    }

    public function getAccountingInstructions()
    {
        return $this->accountingInstructions;
    }

    public function setAccountingInstructions($accountingInstructions)
    {
        $this->accountingInstructions = $accountingInstructions;
    }

    public function getDetails()
    {
        return $this->details;
    }

    public function setDetails(ShipmentDetails $details)
    {
        $this->details = $details;
    }

    public function getAttachments()
    {
        return $this->attachments;
    }

    public function setAttachments($attachments)
    {
        $this->attachments = $attachments;
    }

    public function getForeignHAWB()
    {
        return $this->foreignHAWB;
    }

    public function setForeignHAWB($foreignHAWB)
    {
        $this->foreignHAWB = $foreignHAWB;
    }

    public function getTransportType()
    {
        return $this->transportType;
    }

    public function setTransportType($transportType)
    {
        $this->transportType = $transportType;
    }

    public function getPickupGUID()
    {
        return $this->pickupGUID;
    }

    public function setPickupGUID($pickupGUID)
    {
        $this->pickupGUID = $pickupGUID;
    }

    public function getNumber()
    {
        return $this->number;
    }

    public function setNumber($number)
    {
        $this->number = $number;
    }

    public function getScheduledDelivery()
    {
        return $this->scheduledDelivery;
    }

    public function setScheduledDelivery($scheduledDelivery)
    {
        $this->scheduledDelivery = $scheduledDelivery;
    }
}
