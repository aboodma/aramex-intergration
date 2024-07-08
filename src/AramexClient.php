<?php

namespace Aboodma\AramexIntegration;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;
use Aboodma\AramexIntegration\Exceptions\AramexException;
use Aboodma\AramexIntegration\Helpers\DateTimeHelper;
use Aboodma\AramexIntegration\Models\Shipment;
use Aboodma\AramexIntegration\Models\LabelInfo;
use Aboodma\AramexIntegration\Models\ClientInfo;
use Aboodma\AramexIntegration\Config;

class AramexClient
{
    private $client;
    private $config;

    /**
     * Constructs a new AramexClient instance.
     *
     * @param Config $config The configuration for the AramexClient.
     */
    public function __construct(Config $config)
    {
        $this->client = new Client();
        $this->config = $config;
    }

    /**
     * Creates a shipment using the Aramex API.
     *
     * @param Shipment $shipment The shipment details.
     * @param LabelInfo $labelInfo The label information.
     * @param ClientInfo $clientInfo The client information.
     * @return array The response from the Aramex API.
     * @throws AramexException if there is an error during the request.
     */
    public function createShipment(Shipment $shipment, LabelInfo $labelInfo, ClientInfo $clientInfo)
    {
        $timestamps = DateTimeHelper::calculateTimestamps();
        $shipment->ShippingDateTime = "/Date({$timestamps['current_timestamp']})/";

        $data = [
            'Shipments' => [$shipment],
            'LabelInfo' => $labelInfo,
            'ClientInfo' => $clientInfo,
            'Transaction' => null
        ];

        // Log the request payload
        file_put_contents('request_payload.log', json_encode($data, JSON_PRETTY_PRINT));

        try {
            $response = $this->client->post('https://ws.sbx.aramex.net/ShippingAPI.V2/Shipping/Service_1_0.svc/json/CreateShipments', [
                'body' => json_encode($data),
                'headers' => [
                    'Content-Type' => 'application/json',
                    'Accept' => 'application/json'
                ]
            ]);

            // Log the response payload
            file_put_contents('response_payload.log', $response->getBody()->getContents());

            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            $statusCode = $e->getResponse() ? $e->getResponse()->getStatusCode() : 0;
            $errorDetails = $e->getResponse() ? $e->getResponse()->getBody()->getContents() : '';

            // Log the error response
            file_put_contents('error_response.log', $errorDetails);

            throw new AramexException($e->getMessage(), $statusCode, json_decode($errorDetails, true));
        }
    }
}
