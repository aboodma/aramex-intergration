# Aramex Integration

This PHP library allows for easy integration with the Aramex shipping API. It provides a set of models and a client to interact with the API for creating shipments, generating labels, and more.

## Requirements

- PHP 8 or higher
- Composer

## Installation

Install the library using Composer:

```bash
composer require aboodma/aramex-integration
```

## Usage

### Configuration

Create a configuration object with your Aramex account details:

```PHP
use Aboodma\AramexIntegration\Config;

$config = (new Config())
    ->setUsername("your_username")
    ->setPassword("your_password")
    ->setVersion("v1.0")
    ->setAccountNumber("your_account_number")
    ->setAccountPin("your_account_pin")
    ->setAccountEntity("your_account_entity")
    ->setAccountCountryCode("your_account_country_code")
    ->setSource(24);

```

### Creating a Shipment

```PHP
use Aboodma\AramexIntegration\Models\Address;
use Aboodma\AramexIntegration\Models\Contact;
use Aboodma\AramexIntegration\Models\Party;
use Aboodma\AramexIntegration\Models\Dimensions;
use Aboodma\AramexIntegration\Models\Weight;
use Aboodma\AramexIntegration\Models\Amount;
use Aboodma\AramexIntegration\Models\ShipmentDetails;
use Aboodma\AramexIntegration\Models\Shipment;
use Aboodma\AramexIntegration\Models\LabelInfo;
use Aboodma\AramexIntegration\Models\ClientInfo;
use Aboodma\AramexIntegration\AramexClient;
use Aboodma\AramexIntegration\Exceptions\AramexException;

// Shipper details
$shipperAddress = (new Address())
    ->setLine1("Test Shipper Address Line1")
    ->setLine2("Test Shipper Address Line2")
    ->setCity("Dubai")
    ->setPostCode("000000")
    ->setCountryCode("AE");

$shipperContact = (new Contact())
    ->setPersonName("Test Shipper Name")
    ->setCompanyName("Test Shipper Company Name")
    ->setPhoneNumber1("048707766")
    ->setCellPhone("971556893100")
    ->setEmailAddress("test@aramex.com");

$shipper = (new Party())
    ->setReference1("Shipper Reference")
    ->setAccountNumber("45796")
    ->setPartyAddress($shipperAddress)
    ->setContact($shipperContact);

// Consignee details
$consigneeAddress = (new Address())
    ->setLine1("Test Consignee Address Line1")
    ->setLine2("Test Consignee Address Line2")
    ->setLine3("Test Consignee Address Line3")
    ->setCity("Dubai")
    ->setStateOrProvinceCode("FU")
    ->setCountryCode("AE");

$consigneeContact = (new Contact())
    ->setPersonName("Test Consignee Name")
    ->setCompanyName("Test Consignee Company Name")
    ->setPhoneNumber1("048707766")
    ->setCellPhone("971556893100")
    ->setEmailAddress("tets@hotmail.com");

$consignee = (new Party())
    ->setAccountNumber("0")
    ->setPartyAddress($consigneeAddress)
    ->setContact($consigneeContact);

// Shipment details
$dimensions = (new Dimensions())
    ->setLength(0)
    ->setWidth(0)
    ->setHeight(0)
    ->setUnit("CM");

$actualWeight = (new Weight())
    ->setUnit("KG")
    ->setValue(0.1);

$chargeableWeight = (new Weight())
    ->setUnit("KG")
    ->setValue(0);

$amount = (new Amount())
    ->setCurrencyCode("AED")
    ->setValue(10);

$details = (new ShipmentDetails())
    ->setDimensions($dimensions)
    ->setActualWeight($actualWeight)
    ->setChargeableWeight($chargeableWeight)
    ->setDescriptionOfGoods("Items")
    ->setGoodsOriginCountry("AE")
    ->setNumberOfPieces(1)
    ->setProductGroup("DOM")
    ->setProductType("ONP")
    ->setPaymentType("P")
    ->setPaymentOptions("ACCT")
    ->setCustomsValueAmount($amount);

$shipment = (new Shipment())
    ->setShipper($shipper)
    ->setConsignee($consignee)
    ->setDetails($details)
    ->setReference1("Shipment Reference");

// Label info
$labelInfo = (new LabelInfo())
    ->setReportID(9729)
    ->setReportType("URL");

// Client info
$clientInfo = (new ClientInfo())
    ->setUserName("testingapi@aramex.com")
    ->setPassword('R123456789$r')
    ->setVersion("v1.0")
    ->setAccountNumber("45796")
    ->setAccountPin("116216")
    ->setAccountEntity("DXB")
    ->setAccountCountryCode("AE")
    ->setSource(24);

// Initialize AramexClient and make the request
$client = new AramexClient($config);

try {
    $response = $client->createShipment($shipment, $labelInfo, $clientInfo);
    echo json_encode($response, JSON_PRETTY_PRINT);
} catch (AramexException $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
    echo 'HTTP Status Code: ' . $e->getHttpStatusCode() . PHP_EOL;
    echo 'Error Details: ' . print_r($e->getErrorDetails(), true);
}
```

## Models

### Address

Represents an address.

- `setLine1(string $line1): self`
- `setLine2(string $line2): self`
- `setLine3(string $line3): self`
- `setCity(string $city): self`
- `setStateOrProvinceCode(string $stateOrProvinceCode): self`
- `setPostCode(string $postCode): self`
- `setCountryCode(string $countryCode): self`

### Contact

Represents a contact.


- `setPersonName(string $personName): self`
- `setCompanyName(string $companyName): self`
- `setPhoneNumber1(string $phoneNumber1): self`
- `setPhoneNumber1Ext(string $phoneNumber1Ext): self`
- `setPhoneNumber2(string $phoneNumber2): self`
- `setPhoneNumber2Ext(string $phoneNumber2Ext): self`
- `setFaxNumber(string $faxNumber): self`
- `setCellPhone(string $cellPhone): self`
- `setEmailAddress(string $emailAddress): self`
- `setType(string $type): self`

### Party

Represents a party involved in the shipment (shipper or consignee).

- `setReference1(string $reference1): self`
- `setReference2(string $reference2): self`
- `setAccountNumber(string $accountNumber): self`
- `setPartyAddress(Address $partyAddress): self`
- `setContact(Contact $contact): self`


### Dimensions

Represents the dimensions of a shipment.

- `setLength(float $length): self`
- `setWidth(float $width): self`
- `setHeight(float $height): self`
- `setUnit(string $unit): self`

### Weight

Represents the weight of a shipment.

- `setUnit(string $unit): self`
- `setValue(float $value): self`


### Amount

Represents a monetary amount.

- `setCurrencyCode(string $currencyCode): self`
- `setValue(float $value): self`

### ShipmentDetails

Represents the details of a shipment.

- `setDimensions(Dimensions $dimensions): self`
- `setActualWeight(Weight $actualWeight): self`
- `setChargeableWeight(Weight $chargeableWeight): self`
- `setDescriptionOfGoods(string $descriptionOfGoods): self`
- `setGoodsOriginCountry(string $goodsOriginCountry): self`
- `setNumberOfPieces(int $numberOfPieces): self`
- `setProductGroup(string $productGroup): self`
- `setProductType(string $productType): self`
- `setPaymentType(string $paymentType): self`
- `setPaymentOptions(string $paymentOptions): self`
- `setCustomsValueAmount(Amount $customsValueAmount): self`
- `setCashOnDeliveryAmount(Amount $cashOnDeliveryAmount): self`
- `setInsuranceAmount(Amount $insuranceAmount): self`
- `setCashAdditionalAmount(Amount $cashAdditionalAmount): self`
- `setCashAdditionalAmountDescription(string  $cashAdditionalAmountDescription): self`
- `setCollectAmount(Amount $collectAmount): self`
- `setServices(string $services): self`
- `setItems(array $items): self`
- `setDeliveryInstructions(string $deliveryInstructions): self`
- `setAdditionalProperties(string $additionalProperties): self`
- `setContainsDangerousGoods(bool $containsDangerousGoods): self`


### Shipment

Represents a shipment.

- `setReference1(string $reference1): self`
- `setReference2(string $reference2): self`
- `setReference3(string $reference3): self`
- `setShipper(Party $shipper): self`
- `setConsignee(Party $consignee): self`
- `setThirdParty(Party $thirdParty): self`
- `setShippingDateTime(\DateTime $shippingDateTime): self`
- `setDueDate(\DateTime $dueDate): self`
- `setComments(string $comments): self`
- `setPickupLocation(string $pickupLocation): self`
- `setOperationsInstructions(string $operationsInstructions): self`
- `setAccountingInstructions(string $accountingInstructions): self`
- `setDetails(ShipmentDetails $details): self`
- `setAttachments(array $attachments): self`
- `setForeignHAWB(string $foreignHAWB): self`
- `setTransportType(string $transportType): self`
- `setPickupGUID(string $pickupGUID): self`
- `setNumber(string $number): self`
- `setScheduledDelivery(\DateTime $scheduledDelivery): self`


### LabelInfo

Represents label information for the shipment.

- `setReportID(int $reportID): self`
- `setReportType(string $reportType): self`

### ClientInfo

Represents client information.

- `setUserName(string $userName): self`
- `setPassword(string $password): self`
- `setVersion(string $version): self`
- `setAccountNumber(string $accountNumber): self`
- `setAccountPin(string $accountPin): self`
- `setAccountEntity(string $accountEntity): self`
- `setAccountCountryCode(string $accountCountryCode): self`
- `setSource(int $source): self`


## Error Handling

If the API request fails, an AramexException will be thrown. This exception contains the error message, HTTP status code, and error details returned by the API.

```php
try {
    $response = $client->createShipment($shipment, $labelInfo, $clientInfo);
    echo json_encode($response, JSON_PRETTY_PRINT);
} catch (AramexException $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
    echo 'HTTP Status Code: ' . $e->getHttpStatusCode() . PHP_EOL;
    echo 'Error Details: ' . print_r($e->getErrorDetails(), true);
}
```

## Logging

The library logs request payloads, response payloads, and error responses to log files for debugging purposes.


### Contributing

Please submit issues and pull requests on the GitHub repository.


### License

This project is licensed under the MIT License.


