<?php

namespace Aboodma\AramexIntegration\Models;

class ShipmentDetails
{
    public $Dimensions;
    public $ActualWeight;
    public $ChargeableWeight;
    public $DescriptionOfGoods;
    public $GoodsOriginCountry;
    public $NumberOfPieces;
    public $ProductGroup;
    public $ProductType;
    public $PaymentType;
    public $PaymentOptions;
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
     * Retrieves the dimensions of the shipment.
     *
     * @return Dimensions The dimensions of the shipment.
     */
    public function getDimensions(): Dimensions
    {
        return $this->Dimensions;
    }

    /**
     * Sets the dimensions of the shipment.
     *
     * @param Dimensions $dimensions The dimensions to set.
     * @return $this
     */
    public function setDimensions(Dimensions $dimensions): self
    {
        $this->Dimensions = $dimensions;
        return $this;
    }

    /**
     * Retrieves the actual weight of the shipment.
     *
     * @return Weight The actual weight of the shipment.
     */
    public function getActualWeight(): Weight
    {
        return $this->ActualWeight;
    }

    /**
     * Sets the actual weight of the shipment.
     *
     * @param Weight $actualWeight The actual weight to set.
     * @return $this
     */
    public function setActualWeight(Weight $actualWeight): self
    {
        $this->ActualWeight = $actualWeight;
        return $this;
    }

    /**
     * Retrieves the chargeable weight of the shipment.
     *
     * @return Weight The chargeable weight of the shipment.
     */
    public function getChargeableWeight(): Weight
    {
        return $this->ChargeableWeight;
    }

    /**
     * Sets the chargeable weight of the shipment.
     *
     * @param Weight $chargeableWeight The chargeable weight to set.
     * @return $this
     */
    public function setChargeableWeight(Weight $chargeableWeight): self
    {
        $this->ChargeableWeight = $chargeableWeight;
        return $this;
    }

    /**
     * Retrieves the description of goods.
     *
     * @return string|null The description of goods.
     */
    public function getDescriptionOfGoods(): ?string
    {
        return $this->DescriptionOfGoods;
    }

    /**
     * Sets the description of goods.
     *
     * @param string $descriptionOfGoods The description of goods to set.
     * @return $this
     */
    public function setDescriptionOfGoods(string $descriptionOfGoods): self
    {
        $this->DescriptionOfGoods = $descriptionOfGoods;
        return $this;
    }

    /**
     * Retrieves the origin country of the goods.
     *
     * @return string The origin country of the goods.
     */
    public function getGoodsOriginCountry(): string
    {
        return $this->GoodsOriginCountry;
    }

    /**
     * Sets the origin country of the goods.
     *
     * @param string $goodsOriginCountry The origin country to set.
     * @return $this
     */
    public function setGoodsOriginCountry(string $goodsOriginCountry): self
    {
        $this->GoodsOriginCountry = $goodsOriginCountry;
        return $this;
    }

    /**
     * Retrieves the number of pieces in the shipment.
     *
     * @return int The number of pieces in the shipment.
     */
    public function getNumberOfPieces(): int
    {
        return $this->NumberOfPieces;
    }

    /**
     * Sets the number of pieces in the shipment.
     *
     * @param int $numberOfPieces The number of pieces to set.
     * @return $this
     */
    public function setNumberOfPieces(int $numberOfPieces): self
    {
        $this->NumberOfPieces = $numberOfPieces;
        return $this;
    }

    /**
     * Retrieves the product group of the shipment.
     *
     * @return string The product group of the shipment.
     */
    public function getProductGroup(): string
    {
        return $this->ProductGroup;
    }

    /**
     * Sets the product group of the shipment.
     *
     * @param string $productGroup The product group to set.
     * @return $this
     */
    public function setProductGroup(string $productGroup): self
    {
        $this->ProductGroup = $productGroup;
        return $this;
    }

    /**
     * Retrieves the product type of the shipment.
     *
     * @return string The product type of the shipment.
     */
    public function getProductType(): string
    {
        return $this->ProductType;
    }

    /**
     * Sets the product type of the shipment.
     *
     * @param string $productType The product type to set.
     * @return $this
     */
    public function setProductType(string $productType): self
    {
        $this->ProductType = $productType;
        return $this;
    }

    /**
     * Retrieves the payment type for the shipment.
     *
     * @return string The payment type for the shipment.
     */
    public function getPaymentType(): string
    {
        return $this->PaymentType;
    }

    /**
     * Sets the payment type for the shipment.
     *
     * @param string $paymentType The payment type to set.
     * @return $this
     */
    public function setPaymentType(string $paymentType): self
    {
        $this->PaymentType = $paymentType;
        return $this;
    }

    /**
     * Retrieves the payment options for the shipment.
     *
     * @return string The payment options for the shipment.
     */
    public function getPaymentOptions(): string
    {
        return $this->PaymentOptions;
    }

    /**
     * Sets the payment options for the shipment.
     *
     * @param string $paymentOptions The payment options to set.
     * @return $this
     */
    public function setPaymentOptions(string $paymentOptions): self
    {
        $this->PaymentOptions = $paymentOptions;
        return $this;
    }

    /**
     * Retrieves the customs value amount.
     *
     * @return Amount|null The customs value amount.
     */
    public function getCustomsValueAmount(): ?Amount
    {
        return $this->customsValueAmount;
    }

    /**
     * Sets the customs value amount.
     *
     * @param Amount $customsValueAmount The customs value amount to set.
     * @return $this
     */
    public function setCustomsValueAmount(Amount $customsValueAmount): self
    {
        $this->customsValueAmount = $customsValueAmount;
        return $this;
    }

    /**
     * Retrieves the cash on delivery amount.
     *
     * @return Amount|null The cash on delivery amount.
     */
    public function getCashOnDeliveryAmount(): ?Amount
    {
        return $this->cashOnDeliveryAmount;
    }

    /**
     * Sets the cash on delivery amount.
     *
     * @param Amount $cashOnDeliveryAmount The cash on delivery amount to set.
     * @return $this
     */
    public function setCashOnDeliveryAmount(Amount $cashOnDeliveryAmount): self
    {
        $this->cashOnDeliveryAmount = $cashOnDeliveryAmount;
        return $this;
    }

    /**
     * Retrieves the insurance amount.
     *
     * @return Amount|null The insurance amount.
     */
    public function getInsuranceAmount(): ?Amount
    {
        return $this->insuranceAmount;
    }

    /**
     * Sets the insurance amount.
     *
     * @param Amount $insuranceAmount The insurance amount to set.
     * @return $this
     */
    public function setInsuranceAmount(Amount $insuranceAmount): self
    {
        $this->insuranceAmount = $insuranceAmount;
        return $this;
    }

    /**
     * Retrieves the additional cash amount.
     *
     * @return Amount|null The additional cash amount.
     */
    public function getCashAdditionalAmount(): ?Amount
    {
        return $this->cashAdditionalAmount;
    }

    /**
     * Sets the additional cash amount.
     *
     * @param Amount $cashAdditionalAmount The additional cash amount to set.
     * @return $this
     */
    public function setCashAdditionalAmount(Amount $cashAdditionalAmount): self
    {
        $this->cashAdditionalAmount = $cashAdditionalAmount;
        return $this;
    }

    /**
     * Retrieves the description of the additional cash amount.
     *
     * @return string|null The description of the additional cash amount.
     */
    public function getCashAdditionalAmountDescription(): ?string
    {
        return $this->cashAdditionalAmountDescription;
    }

    /**
     * Sets the description of the additional cash amount.
     *
     * @param string $cashAdditionalAmountDescription The description to set.
     * @return $this
     */
    public function setCashAdditionalAmountDescription(string $cashAdditionalAmountDescription): self
    {
        $this->cashAdditionalAmountDescription = $cashAdditionalAmountDescription;
        return $this;
    }

    /**
     * Retrieves the collect amount.
     *
     * @return Amount|null The collect amount.
     */
    public function getCollectAmount(): ?Amount
    {
        return $this->collectAmount;
    }

    /**
     * Sets the collect amount.
     *
     * @param Amount $collectAmount The collect amount to set.
     * @return $this
     */
    public function setCollectAmount(Amount $collectAmount): self
    {
        $this->collectAmount = $collectAmount;
        return $this;
    }

    /**
     * Retrieves the services associated with the shipment.
     *
     * @return string|null The services associated with the shipment.
     */
    public function getServices(): ?string
    {
        return $this->services;
    }

    /**
     * Sets the services associated with the shipment.
     *
     * @param string $services The services to set.
     * @return $this
     */
    public function setServices(string $services): self
    {
        $this->services = $services;
        return $this;
    }

    /**
     * Retrieves the items in the shipment.
     *
     * @return array|null The items in the shipment.
     */
    public function getItems(): ?array
    {
        return $this->items;
    }

    /**
     * Sets the items in the shipment.
     *
     * @param array $items The items to set.
     * @return $this
     */
    public function setItems(array $items): self
    {
        $this->items = $items;
        return $this;
    }

    /**
     * Retrieves the delivery instructions for the shipment.
     *
     * @return string|null The delivery instructions for the shipment.
     */
    public function getDeliveryInstructions(): ?string
    {
        return $this->deliveryInstructions;
    }

    /**
     * Sets the delivery instructions for the shipment.
     *
     * @param string $deliveryInstructions The delivery instructions to set.
     * @return $this
     */
    public function setDeliveryInstructions(string $deliveryInstructions): self
    {
        $this->deliveryInstructions = $deliveryInstructions;
        return $this;
    }

    /**
     * Retrieves additional properties for the shipment.
     *
     * @return string|null Additional properties for the shipment.
     */
    public function getAdditionalProperties(): ?string
    {
        return $this->additionalProperties;
    }

    /**
     * Sets additional properties for the shipment.
     *
     * @param string $additionalProperties Additional properties to set.
     * @return $this
     */
    public function setAdditionalProperties(string $additionalProperties): self
    {
        $this->additionalProperties = $additionalProperties;
        return $this;
    }

    /**
     * Checks if the shipment contains dangerous goods.
     *
     * @return bool True if the shipment contains dangerous goods, false otherwise.
     */
    public function getContainsDangerousGoods(): bool
    {
        return $this->containsDangerousGoods;
    }

    /**
     * Sets whether the shipment contains dangerous goods.
     *
     * @param bool $containsDangerousGoods True if the shipment contains dangerous goods, false otherwise.
     * @return $this
     */
    public function setContainsDangerousGoods(bool $containsDangerousGoods): self
    {
        $this->containsDangerousGoods = $containsDangerousGoods;
        return $this;
    }
}
