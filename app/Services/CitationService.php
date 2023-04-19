<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Arr;

class CitationService
{
    protected $baseUrl = 'http://zenquotes.io/api/';
    protected $client;

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => $this->baseUrl
        ]);
    }

    public function getCitationDuJour()
    {
        $response = $this->client->request('GET', 'today', [
            'headers' => [
                'Accept' => 'application/json'
            ]
        ]);

        if ($response->getStatusCode() != 200) {
            throw new \Exception('Oups!');
        }

        $result = strval($response->getBody());

        $data = json_decode($result, true);

        return Arr::first($data);
    }

}