
<?php

require_once __DIR__ . '/vendor/autoload.php';

use Aboodma\AramexIntegration\AramexClient;
use Aboodma\AramexIntegration\Models\ClientInfo;


$clientInfo = (new ClientInfo())
    ->setUserName("testingapi@aramex.com")
    ->setPassword('R123456789$r')
    ->setVersion("v1.0")
    ->setAccountNumber("45796")
    ->setAccountPin("116216")
    ->setAccountEntity("DXB")
    ->setAccountCountryCode("AE")
    ->setSource(24);

$client = new AramexClient($clientInfo);
