<?php
namespace App\Service ;

use Symfony\Contracts\HttpClient\HttpClientInterface;

class CallApiService 
{
    private $client;

    public function __construct(HttpClientInterface $client)
    {
        $this->client=$client;
    }
    public function getOpenseaData(): array
    {
        $response = $this->client->request(
          'GET',
          'https://api.opensea.io/api/v1/collections?offset=0&limit=300'
        );
        return $response->toArray();
    }
}