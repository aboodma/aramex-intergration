<?php

use PHPUnit\Framework\TestCase;
use AramexIntegration\AramexClient;
use AramexIntegration\Config;

class AramexClientTest extends TestCase
{
    private $aramexClient;

    protected function setUp(): void
    {
        $config = new Config('https://sandbox.aramex.com', [
            'UserName' => 'your_username',
            'Password' => 'your_password',
            'Version' => 'v1',
            'AccountNumber' => '123456',
            'AccountPin' => '654321',
            'AccountEntity' => 'AMM',
            'AccountCountryCode' => 'JO'
        ]);

        $this->aramexClient = new AramexClient($config);
    }

    public function testCreateShipment()
    {
        $shipmentData = [
            // Fill with necessary shipment data
        ];

        $result = $this->aramexClient->createShipment($shipmentData);
        $this->assertIsArray($result);
    }

    public function testTrackShipment()
    {
        $trackingNumber = '1234567890';

        $result = $this->aramexClient->trackShipment($trackingNumber);
        $this->assertIsArray($result);
    }
}