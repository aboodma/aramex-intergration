<?php

namespace Aboodma\AramexIntegration\Models;

class Shipment
{
    public $reference1;
    public $reference2;
    public $reference3;
    public $Shipper;
    public $Consignee;
    public $thirdParty;
    public $ShippingDateTime;
    public $dueDate;
    public $comments;
    public $pickupLocation;
    public $operationsInstructions;
    public $accountingInstructions;
    public $Details;
    public $attachments;
    public $foreignHAWB;
    public $transportType;
    public $pickupGUID;
    public $number;
    public $scheduledDelivery;

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
     * Retrieves the third reference.
     *
     * @return string The third reference.
     */
    public function getReference3()
    {
        return $this->reference3;
    }

    /**
     * Sets the third reference.
     *
     * @param string $reference3 The third reference to set.
     * @return $this
     */
    public function setReference3($reference3)
    {
        $this->reference3 = $reference3;
        return $this;
    }

    /**
     * Retrieves the shipper of the shipment.
     *
     * @return Party The shipper of the shipment.
     */
    public function getShipper()
    {
        return $this->Shipper;
    }

    /**
     * Sets the shipper of the shipment.
     *
     * @param Party $shipper The shipper to set.
     * @return $this
     */
    public function setShipper(Party $shipper)
    {
        $this->Shipper = $shipper;
        return $this;
    }

    /**
     * Retrieves the consignee of the shipment.
     *
     * @return Party The consignee of the shipment.
     */
    public function getConsignee()
    {
        return $this->Consignee;
    }

    /**
     * Sets the consignee of the shipment.
     *
     * @param Party $consignee The consignee to set.
     * @return $this
     */
    public function setConsignee(Party $consignee)
    {
        $this->Consignee = $consignee;
        return $this;
    }

    /**
     * Retrieves the third party associated with the shipment.
     *
     * @return Party The third party associated with the shipment.
     */
    public function getThirdParty()
    {
        return $this->thirdParty;
    }

    /**
     * Sets the third party associated with the shipment.
     *
     * @param Party $thirdParty The third party to set.
     * @return $this
     */
    public function setThirdParty(Party $thirdParty)
    {
        $this->thirdParty = $thirdParty;
        return $this;
    }

    /**
     * Retrieves the shipping date and time.
     *
     * @return \DateTime The shipping date and time.
     */
    public function getShippingDateTime()
    {
        return $this->ShippingDateTime;
    }

    /**
     * Sets the shipping date and time.
     *
     * @param \DateTime $shippingDateTime The shipping date and time to set.
     * @return $this
     */
    public function setShippingDateTime(\DateTime $shippingDateTime)
    {
        $this->ShippingDateTime = $shippingDateTime;
        return $this;
    }

    /**
     * Retrieves the due date of the shipment.
     *
     * @return \DateTime The due date of the shipment.
     */
    public function getDueDate()
    {
        return $this->dueDate;
    }

    /**
     * Sets the due date of the shipment.
     *
     * @param \DateTime $dueDate The due date to set.
     * @return $this
     */
    public function setDueDate(\DateTime $dueDate)
    {
        $this->dueDate = $dueDate;
        return $this;
    }

    /**
     * Retrieves the comments of the shipment.
     *
     * @return string The comments of the shipment.
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets the comments of the shipment.
     *
     * @param string $comments The comments to set.
     * @return $this
     */
    public function setComments($comments)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Retrieves the pickup location.
     *
     * @return string The pickup location.
     */
    public function getPickupLocation()
    {
        return $this->pickupLocation;
    }

    /**
     * Sets the pickup location.
     *
     * @param string $pickupLocation The pickup location to set.
     * @return $this
     */
    public function setPickupLocation($pickupLocation)
    {
        $this->pickupLocation = $pickupLocation;
        return $this;
    }

    /**
     * Retrieves the operations instructions.
     *
     * @return string The operations instructions.
     */
    public function getOperationsInstructions()
    {
        return $this->operationsInstructions;
    }

    /**
     * Sets the operations instructions.
     *
     * @param string $operationsInstructions The operations instructions to set.
     * @return $this
     */
    public function setOperationsInstructions($operationsInstructions)
    {
        $this->operationsInstructions = $operationsInstructions;
        return $this;
    }

    /**
     * Retrieves the accounting instructions.
     *
     * @return string The accounting instructions.
     */
    public function getAccountingInstructions()
    {
        return $this->accountingInstructions;
    }

    /**
     * Sets the accounting instructions.
     *
     * @param string $accountingInstructions The accounting instructions to set.
     * @return $this
     */
    public function setAccountingInstructions($accountingInstructions)
    {
        $this->accountingInstructions = $accountingInstructions;
        return $this;
    }

    /**
     * Retrieves the shipment details.
     *
     * @return ShipmentDetails The shipment details.
     */
    public function getDetails()
    {
        return $this->Details;
    }

    /**
     * Sets the shipment details.
     *
     * @param ShipmentDetails $details The shipment details to set.
     * @return $this
     */
    public function setDetails(ShipmentDetails $details)
    {
        $this->Details = $details;
        return $this;
    }

    /**
     * Retrieves the attachments.
     *
     * @return array The attachments.
     */
    public function getAttachments()
    {
        return $this->attachments;
    }

    /**
     * Sets the attachments.
     *
     * @param array $attachments The attachments to set.
     * @return $this
     */
    public function setAttachments(array $attachments)
    {
        $this->attachments = $attachments;
        return $this;
    }

    /**
     * Retrieves the foreign HAWB.
     *
     * @return string The foreign HAWB.
     */
    public function getForeignHAWB()
    {
        return $this->foreignHAWB;
    }

    /**
     * Sets the foreign HAWB.
     *
     * @param string $foreignHAWB The foreign HAWB to set.
     * @return $this
     */
    public function setForeignHAWB($foreignHAWB)
    {
        $this->foreignHAWB = $foreignHAWB;
        return $this;
    }

    /**
     * Retrieves the transport type.
     *
     * @return string The transport type.
     */
    public function getTransportType()
    {
        return $this->transportType;
    }

    /**
     * Sets the transport type.
     *
     * @param string $transportType The transport type to set.
     * @return $this
     */
    public function setTransportType($transportType)
    {
        $this->transportType = $transportType;
        return $this;
    }

    /**
     * Retrieves the pickup GUID.
     *
     * @return string The pickup GUID.
     */
    public function getPickupGUID()
    {
        return $this->pickupGUID;
    }

    /**
     * Sets the pickup GUID.
     *
     * @param string $pickupGUID The pickup GUID to set.
     * @return $this
     */
    public function setPickupGUID($pickupGUID)
    {
        $this->pickupGUID = $pickupGUID;
        return $this;
    }

    /**
     * Retrieves the shipment number.
     *
     * @return string The shipment number.
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * Sets the shipment number.
     *
     * @param string $number The shipment number to set.
     * @return $this
     */
    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    /**
     * Retrieves the scheduled delivery date.
     *
     * @return \DateTime The scheduled delivery date.
     */
    public function getScheduledDelivery()
    {
        return $this->scheduledDelivery;
    }

    /**
     * Sets the scheduled delivery date.
     *
     * @param \DateTime $scheduledDelivery The scheduled delivery date to set.
     * @return $this
     */
    public function setScheduledDelivery(\DateTime $scheduledDelivery)
    {
        $this->scheduledDelivery = $scheduledDelivery;
        return $this;
    }
}
