# Aramex Integration Package

## Overview

This PHP package provides seamless integration with Aramex's shipping services, enabling you to perform essential operations like creating shipments, tracking shipments, and calculating shipping rates. It leverages the GuzzleHTTP library for HTTP requests, ensuring robust and efficient communication with the Aramex API.

## Features

- **Create Shipments**: Automate the process of creating shipments, complete with necessary documentation.
- **Track Shipments**: Easily track the status of your shipments.
- **Calculate Rates**: Determine shipping costs based on various parameters.

## Installation

Install the package via Composer:

```bash
composer require aboodma/aramex-integration
```

## Usage

### Configuration

First, configure the package with your Aramex API credentials and endpoint.

```php

use Aboodma\AramexIntegration\AramexClient;
use Aboodma\AramexIntegration\Config;

$config = new Config('https://sandbox.aramex.com', [
    'UserName' => 'your_username',
    'Password' => 'your_password',
    'Version' => 'v1',
    'AccountNumber' => '123456',
    'AccountPin' => '654321',
    'AccountEntity' => 'AMM',
    'AccountCountryCode' => 'JO'
]);
```

### Creating a Shipment

Use the `createShipment` method to create a new shipment.

```php
$aramexClient = new AramexClient($config);

$shipmentData = [
    // Fill with necessary shipment data as per Aramex API requirements
];

$response = $aramexClient->createShipment($shipmentData);
print_r($response);

```


### Tracking a Shipment
Use the `trackShipment` method to track a shipment by its tracking number.

```php
$trackingNumber = '1234567890';
$response = $aramexClient->trackShipment($trackingNumber);
print_r($response);
```

## Testing

To ensure your integration works as expected, you can write PHPUnit tests. Below is a basic test setup.

```php
<?php

use PHPUnit\Framework\TestCase;
use Aboodma\AramexIntegration\AramexClient;
use Aboodma\AramexIntegration\Config;

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
```

## Contributing

If you want to contribute to this project, please fork the repository and submit a pull request. For major changes, please open an issue first to discuss what you would like to change.

### License

This project is licensed under the MIT License. See the LICENSE file for details.

## Contact

For any questions or support, please contact Abdulrahman Mardinli at <aboodma@gmail.com>.