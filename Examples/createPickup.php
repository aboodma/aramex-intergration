
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Aboodma\AramexIntegration\AramexClient;
use Aboodma\AramexIntegration\Helpers\DateTimeHelper;
use Aboodma\AramexIntegration\Models\Address;
use Aboodma\AramexIntegration\Models\Contact;
use Aboodma\AramexIntegration\Models\Dimensions;
use Aboodma\AramexIntegration\Models\Pickup;
use Aboodma\AramexIntegration\Models\PickupItems;
use Aboodma\AramexIntegration\Models\Weight;


$timestamps = DateTimeHelper::calculateTimestamps();
$pickUpAddress = new Address();

$pickUpAddress->setLine1("Test Consignee Address Line1")
->setLine2("Test Consignee Address Line2")
->setLine3("Test Consignee Address Line3")
->setCity("Dubai")
->setStateOrProvinceCode("FU")
->setCountryCode("AE");

$pickUpContact = new Contact();
$pickUpContact->setPersonName("Test Consignee Name")
->setCompanyName("Test Consignee Company Name")
->setPhoneNumber1("048707766")
->setCellPhone("971556893100")
->setEmailAddress("tets@hotmail.com");

$weight = new Weight();
$weight->setUnit('KG')->setValue(10);
$ShipmentDimensions = new Dimensions();
$ShipmentDimensions->setLength(0)->setWidth(0)->setHeight(0)->setUnit('CM');
$pickUpItems[] = new PickupItems();
$pickUpItems[0]->setProductGroup(1)
->setProductType(1)
->setNumberOfShipments("kg")
->setPackageType("Food")
->setPayment("P")
->setShipmentWeight($weight)
->setShipmentVolume(0.5)
->setNumberOfPieces(1)
->setCashAmount(0.5)
->setExtraCharges(0.5)
->setShipmentDimensions($ShipmentDimensions)
->setComments("Airway Bill Number:44097846262");


$pickUp = new Pickup();
$pickUp->setPickupAddress($pickUpAddress)
->setPickupContact($pickUpContact)
->setPickupLocation("test location")
->setPickupItems($pickUpItems)
->setPickupDate("2022-01-01")
->setReadyTime("2022-01-01")
->setLastPickupTime("2022-01-01")
->setClosingTime("2022-01-01")
->setComments("test comment")
->setReference1("001")
->setReference2("002")
->setVehicle("test vehicle")
->setShipments("test shipment")
->setStatus("Ready")
->setExistingShipments("test existing shipment")
->setBranch("test branch")
->setRouteCode("test route code");

$pickUp->PickupDate = "/Date({$timestamps['current_timestamp']})/";
$pickUp->ReadyTime = "/Date({$timestamps['current_timestamp']})/";
$pickUp->LastPickupTime = "/Date({$timestamps['current_timestamp']})/";
$pickUp->ClosingTime = "/Date({$timestamps['current_timestamp']})/";

$clientInfo = (new \Aboodma\AramexIntegration\Models\ClientInfo())
    ->setUserName("testingapi@aramex.com")
    ->setPassword('R123456789$r')
    ->setVersion("v1.0")
    ->setAccountNumber("45796")
    ->setAccountPin("116216")
    ->setAccountEntity("DXB")
    ->setAccountCountryCode("AE")
    ->setSource(24);

$client = new AramexClient($clientInfo);
$client->createPickup($pickUp);