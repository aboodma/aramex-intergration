<?php

use Aboodma\AramexIntegration\Helpers\DateTimeHelper;

require_once __DIR__ . '/../vendor/autoload.php';

// Create instances of Address, Contact, and Party for Shipper and Consignee
$shipperAddress = (new \Aboodma\AramexIntegration\Models\Address())
    ->setLine1("Test Shipper Address Line1")
    ->setLine2("Test Shipper Address Line2")
    ->setCity("Dubai")
    ->setPostCode("000000")
    ->setCountryCode("AE");

$shipperContact = (new \Aboodma\AramexIntegration\Models\Contact())
    ->setPersonName("Test Shipper Name")
    ->setCompanyName("Test Shipper Company Name")
    ->setPhoneNumber1("048707766")
    ->setCellPhone("971556893100")
    ->setEmailAddress("test@aramex.com");

$shipper = (new \Aboodma\AramexIntegration\Models\Party())
    ->setReference1("Shipper Reference")
    ->setAccountNumber("45796")
    ->setPartyAddress($shipperAddress)
    ->setContact($shipperContact);

$consigneeAddress = (new \Aboodma\AramexIntegration\Models\Address())
    ->setLine1("Test Consignee Address Line1")
    ->setLine2("Test Consignee Address Line2")
    ->setLine3("Test Consignee Address Line3")
    ->setCity("Dubai")
    ->setStateOrProvinceCode("FU")
    ->setCountryCode("AE");

$consigneeContact = (new \Aboodma\AramexIntegration\Models\Contact())
    ->setPersonName("Test Consignee Name")
    ->setCompanyName("Test Consignee Company Name")
    ->setPhoneNumber1("048707766")
    ->setCellPhone("971556893100")
    ->setEmailAddress("tets@hotmail.com");

$consignee = (new \Aboodma\AramexIntegration\Models\Party())
    ->setAccountNumber("0")
    ->setPartyAddress($consigneeAddress)
    ->setContact($consigneeContact);

$dimensions = (new \Aboodma\AramexIntegration\Models\Dimensions())
    ->setLength(0)
    ->setWidth(0)
    ->setHeight(0)
    ->setUnit("CM");

$actualWeight = (new \Aboodma\AramexIntegration\Models\Weight())
    ->setUnit("KG")
    ->setValue(0.1);

$chargeableWeight = (new \Aboodma\AramexIntegration\Models\Weight())
    ->setUnit("KG")
    ->setValue(0);

$amount = (new \Aboodma\AramexIntegration\Models\Amount())
    ->setCurrencyCode("AED")
    ->setValue(10);

$details = (new \Aboodma\AramexIntegration\Models\ShipmentDetails())
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

$timestamps = DateTimeHelper::calculateTimestamps();
$shipment = (new \Aboodma\AramexIntegration\Models\Shipment())
    ->setShipper($shipper)
    ->setConsignee($consignee)
    ->setDetails($details)
    ->setReference1("Shipment Reference");  
$shipment->ShippingDateTime = "/Date({$timestamps['current_timestamp']})/";

$labelInfo = (new \Aboodma\AramexIntegration\Models\LabelInfo())
    ->setReportID(9729)
    ->setReportType("URL");

$clientInfo = (new \Aboodma\AramexIntegration\Models\ClientInfo())
    ->setUserName("testingapi@aramex.com")
    ->setPassword('R123456789$r')
    ->setVersion("v1.0")
    ->setAccountNumber("45796")
    ->setAccountPin("116216")
    ->setAccountEntity("DXB")
    ->setAccountCountryCode("AE")
    ->setSource(24);



$client = new \Aboodma\AramexIntegration\AramexClient($clientInfo);

try {
    $response = $client->createShipment($shipment, $labelInfo);
    // $responseBody = $response->getBody()->getContents();

    // Encode the response body to JSON
    // $encoded = json_encode($responseBody);
    // $decoded = json_decode($encoded, true);
    // Decode the JSON and print it as an associative array
    print_r($response['Shipments'][0]['ShipmentLabel']['LabelURL']);
} catch (\Aboodma\AramexIntegration\Exceptions\AramexException $e) {
    echo 'Error: ' . $e->getMessage() . PHP_EOL;
    echo 'HTTP Status Code: ' . $e->getHttpStatusCode() . PHP_EOL;
    echo 'Error Details: ' . print_r($e->getErrorDetails(), true);
}
