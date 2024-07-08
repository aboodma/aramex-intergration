<?php

include "vendor/autoload.php";

use Aboodma\AramexIntegration\AramexClient;
use Aboodma\AramexIntegration\Config;
use Aboodma\AramexIntegration\Models\Address;
use Aboodma\AramexIntegration\Models\ClientInfo;
use Aboodma\AramexIntegration\Models\Dimensions;
use Aboodma\AramexIntegration\Models\Party;
use Aboodma\AramexIntegration\Models\Shipment;
use Aboodma\AramexIntegration\Models\ShipmentDetails;
use Aboodma\AramexIntegration\Models\Weight;
use Aboodma\AramexIntegration\Models\Contact;
use Aboodma\AramexIntegration\Models\LabelInfo;

// Create instances of Address, Contact, and Party for Shipper and Consignee
$shipperAddress = new \Aboodma\AramexIntegration\Models\Address();
$shipperAddress->setLine1("Test Shipper Address Line1");
$shipperAddress->setLine2("Test Shipper Address Line2");
$shipperAddress->setCity("Dubai");
$shipperAddress->setPostCode("000000");
$shipperAddress->setCountryCode("AE");

$shipperContact = new \Aboodma\AramexIntegration\Models\Contact();
$shipperContact->setPersonName("Test Shipper Name");
$shipperContact->setCompanyName("Test Shipper Company Name");
$shipperContact->setPhoneNumber1("048707766");
$shipperContact->setCellPhone("971556893100");
$shipperContact->setEmailAddress("test@aramex.com");

$shipper = new \Aboodma\AramexIntegration\Models\Party($shipperAddress, $shipperContact);
$shipper->setReference1("Shipper Reference");
$shipper->setAccountNumber("45796");

$consigneeAddress = new \Aboodma\AramexIntegration\Models\Address();
$consigneeAddress->setLine1("Test Consignee Address Line1");
$consigneeAddress->setLine2("Test Consignee Address Line2");
$consigneeAddress->setLine3("Test Consignee Address Line3");
$consigneeAddress->setCity("Dubai");
$consigneeAddress->setStateOrProvinceCode("FU");
$consigneeAddress->setCountryCode("AE");

$consigneeContact = new \Aboodma\AramexIntegration\Models\Contact();
$consigneeContact->setPersonName("Test Consignee Name");
$consigneeContact->setCompanyName("Test Consignee Company Name");
$consigneeContact->setPhoneNumber1("048707766");
$consigneeContact->setCellPhone("971556893100");
$consigneeContact->setEmailAddress("tets@hotmail.com");

$consignee = new \Aboodma\AramexIntegration\Models\Party($consigneeAddress, $consigneeContact);

$dimensions = new \Aboodma\AramexIntegration\Models\Dimensions();
$dimensions->setLength(0);
$dimensions->setWidth(0);
$dimensions->setHeight(0);
$dimensions->setUnit("CM");

$actualWeight = new \Aboodma\AramexIntegration\Models\Weight();
$actualWeight->setUnit("KG");
$actualWeight->setValue(0.1);

$chargeableWeight = new \Aboodma\AramexIntegration\Models\Weight();
$chargeableWeight->setUnit("KG");
$chargeableWeight->setValue(0);

$amount = new \Aboodma\AramexIntegration\Models\Amount();
$amount->setCurrencyCode("AED");
$amount->setValue(10);

$details = new \Aboodma\AramexIntegration\Models\ShipmentDetails($dimensions, $actualWeight, $chargeableWeight);
$details->setDescriptionOfGoods("Items");
$details->setGoodsOriginCountry("AE");
$details->setNumberOfPieces(1);
$details->setProductGroup("DOM");
$details->setProductType("ONP");
$details->setPaymentType("P");
$details->setPaymentOptions("ACCT");
$details->setCustomsValueAmount($amount);

$shipment = new \Aboodma\AramexIntegration\Models\Shipment($shipper, $consignee, $details);
$shipment->setReference1("Shipment Reference");

$labelInfo = new \Aboodma\AramexIntegration\Models\LabelInfo();
$labelInfo->setReportID(9729);
$labelInfo->setReportType("URL");

$clientInfo = new \Aboodma\AramexIntegration\Models\ClientInfo();
$clientInfo->setUserName("testingapi@aramex.com");
$clientInfo->setPassword('R123456789$r');
$clientInfo->setVersion("v1.0");
$clientInfo->setAccountNumber("45796");
$clientInfo->setAccountPin("116216");
$clientInfo->setAccountEntity("DXB");
$clientInfo->setAccountCountryCode("AE");
$clientInfo->setSource(24);

// Initialize AramexClient and make the request
$config = new \Aboodma\AramexIntegration\Config();
$config->setUsername("your_username");
$config->setPassword("your_password");
$config->setVersion("v1.0");
$config->setAccountNumber("your_account_number");
$config->setAccountPin("your_account_pin");
$config->setAccountEntity("your_account_entity");
$config->setAccountCountryCode("your_account_country_code");
$config->setSource(24);

$client = new \Aboodma\AramexIntegration\AramexClient($config);

try {
    $response = $client->createShipment($shipment, $labelInfo, $clientInfo);
    print_r($response);
} catch (\Aboodma\AramexIntegration\Exceptions\AramexException $e) {
    echo 'Error: ' . $e->getMessage();
    echo 'HTTP Status Code: ' . $e->getHttpStatusCode();
    echo 'Error Details: ' . print_r($e->getErrorDetails(), true);
}





