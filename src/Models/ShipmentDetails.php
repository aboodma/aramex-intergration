<?php

namespace Aboodma\AramexIntegration\Models;

class ShipmentDetails
{
    public $dimensions;
    public $actualWeight;
    public $chargeableWeight;
    public $descriptionOfGoods;
    public $goodsOriginCountry;
    public $numberOfPieces;
    public $productGroup;
    public $productType;
    public $paymentType;
    public $paymentOptions;
    public $customsValueAmount;
    public $cashOnDeliveryAmount;
    public $insuranceAmount;
    public $cashAdditionalAmount;
    public $cashAdditionalAmountDescription;
    public $collectAmount;
    public $services;
    public $items;
    public $deliveryInstructions;
    public $additionalProperties;
    public $containsDangerousGoods;

    /**
     * Constructor for initializing ShipmentDetails object with dimensions, actual weight, and chargeable weight.
     *
     * @param Dimensions $dimensions The dimensions of the shipment.
     * @param Weight $actualWeight The actual weight of the shipment.
     * @param Weight $chargeableWeight The chargeable weight of the shipment.
     */
    public function __construct(Dimensions $dimensions, Weight $actualWeight, Weight $chargeableWeight)
    {
        $this->dimensions = $dimensions;
        $this->actualWeight = $actualWeight;
        $this->chargeableWeight = $chargeableWeight;
    }

    public function getDimensions(): Dimensions
    {
        return $this->dimensions;
    }

    public function setDimensions(Dimensions $dimensions): void
    {
        $this->dimensions = $dimensions;
    }

    public function getActualWeight(): Weight
    {
        return $this->actualWeight;
    }

    public function setActualWeight(Weight $actualWeight): void
    {
        $this->actualWeight = $actualWeight;
    }

    public function getChargeableWeight(): Weight
    {
        return $this->chargeableWeight;
    }

    public function setChargeableWeight(Weight $chargeableWeight): void
    {
        $this->chargeableWeight = $chargeableWeight;
    }

    public function getDescriptionOfGoods(): ?string
    {
        return $this->descriptionOfGoods;
    }

    public function setDescriptionOfGoods(string $descriptionOfGoods): void
    {
        $this->descriptionOfGoods = $descriptionOfGoods;
    }

    public function getGoodsOriginCountry(): string
    {
        return $this->goodsOriginCountry;
    }

    public function setGoodsOriginCountry(string $goodsOriginCountry): void
    {
        $this->goodsOriginCountry = $goodsOriginCountry;
    }

    public function getNumberOfPieces(): int
    {
        return $this->numberOfPieces;
    }

    public function setNumberOfPieces(int $numberOfPieces): void
    {
        $this->numberOfPieces = $numberOfPieces;
    }

    public function getProductGroup(): string
    {
        return $this->productGroup;
    }

    public function setProductGroup(string $productGroup): void
    {
        $this->productGroup = $productGroup;
    }

    public function getProductType(): string
    {
        return $this->productType;
    }

    public function setProductType(string $productType): void
    {
        $this->productType = $productType;
    }

    public function getPaymentType(): string
    {
        return $this->paymentType;
    }

    public function setPaymentType(string $paymentType): void
    {
        $this->paymentType = $paymentType;
    }

    public function getPaymentOptions(): string
    {
        return $this->paymentOptions;
    }

    public function setPaymentOptions(string $paymentOptions): void
    {
        $this->paymentOptions = $paymentOptions;
    }

    public function getCustomsValueAmount(): ?Amount
    {
        return $this->customsValueAmount;
    }

    public function setCustomsValueAmount(Amount $customsValueAmount): void
    {
        $this->customsValueAmount = $customsValueAmount;
    }

    public function getCashOnDeliveryAmount(): ?Amount
    {
        return $this->cashOnDeliveryAmount;
    }

    public function setCashOnDeliveryAmount(Amount $cashOnDeliveryAmount): void
    {
        $this->cashOnDeliveryAmount = $cashOnDeliveryAmount;
    }

    public function getInsuranceAmount(): ?Amount
    {
        return $this->insuranceAmount;
    }

    public function setInsuranceAmount(Amount $insuranceAmount): void
    {
        $this->insuranceAmount = $insuranceAmount;
    }

    public function getCashAdditionalAmount(): ?Amount
    {
        return $this->cashAdditionalAmount;
    }

    public function setCashAdditionalAmount(Amount $cashAdditionalAmount): void
    {
        $this->cashAdditionalAmount = $cashAdditionalAmount;
    }

    public function getCashAdditionalAmountDescription(): ?string
    {
        return $this->cashAdditionalAmountDescription;
    }

    public function setCashAdditionalAmountDescription(string $cashAdditionalAmountDescription): void
    {
        $this->cashAdditionalAmountDescription = $cashAdditionalAmountDescription;
    }

    public function getCollectAmount(): ?Amount
    {
        return $this->collectAmount;
    }

    public function setCollectAmount(Amount $collectAmount): void
    {
        $this->collectAmount = $collectAmount;
    }

    public function getServices(): ?string
    {
        return $this->services;
    }

    public function setServices(string $services): void
    {
        $this->services = $services;
    }

    public function getItems(): ?array
    {
        return $this->items;
    }

    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    public function getDeliveryInstructions(): ?string
    {
        return $this->deliveryInstructions;
    }

    public function setDeliveryInstructions(string $deliveryInstructions): void
    {
        $this->deliveryInstructions = $deliveryInstructions;
    }

    public function getAdditionalProperties(): ?string
    {
        return $this->additionalProperties;
    }

    public function setAdditionalProperties(string $additionalProperties): void
    {
        $this->additionalProperties = $additionalProperties;
    }

    public function getContainsDangerousGoods(): bool
    {
        return $this->containsDangerousGoods;
    }

    public function setContainsDangerousGoods(bool $containsDangerousGoods): void
    {
        $this->containsDangerousGoods = $containsDangerousGoods;
    }
}
