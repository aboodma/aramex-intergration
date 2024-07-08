<?php
namespace Aboodma\AramexIntegration;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Aboodma\AramexIntegration\Exceptions\AramexException;
use Aboodma\AramexIntegration\Models\Shipment;
use Aboodma\AramexIntegration\Models\LabelInfo;
use Aboodma\AramexIntegration\Models\ClientInfo;

class AramexClient
{
    private $client;
    private $config;

    public function __construct(Config $config)
    {
        $this->client = new Client();
        $this->config = $config;
    }

    public function createShipment(Shipment $shipment, LabelInfo $labelInfo, ClientInfo $clientInfo)
    {
        
        $data = [
            'Shipments' => [$shipment],
            'LabelInfo' => $labelInfo,
            'ClientInfo' => $clientInfo,
            'Transaction' => null
        ];
        
        file_put_contents('request_payload.log', json_encode($data, JSON_PRETTY_PRINT));
        // die;
        // Log the request payload

        try {
            $response = $this->client->post('https://ws.sbx.aramex.net/ShippingAPI.V2/Shipping/Service_1_0.svc/json/CreateShipments', [
                'json' => $data,
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json'
                ]
            ]);
            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            $statusCode = $e->getResponse() ? $e->getResponse()->getStatusCode() : 0;
            $errorDetails = $e->getResponse() ? json_decode($e->getResponse()->getBody()->getContents(), true) : [];
            throw new AramexException($e->getMessage(), $statusCode, $errorDetails);
        }
    }
}
