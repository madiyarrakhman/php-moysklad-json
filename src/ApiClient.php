<?php


namespace App;


use App\Builder\EndpointBuilder;

/**
 * Class Client
 * @package App
 * @property string $username
 * @property string $password
 */
class ApiClient
{
    /**
     * @var string $apiUrl
     */
    public $apiUrl = "https://online.moysklad.ru/api/remap/1.2/";

    /**
     * @var string $username
     */
    public $username;

    /**
     * @var string $password
     */
    public $password;

    /**
     * @var \GuzzleHttp\Client
     */
    public $client;

    /**
     * ApiClient constructor.
     * @param string $username
     * @param string $password
     */
    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
        $this->client = new \GuzzleHttp\Client([
            'base_uri' => $this->apiUrl,
            'headers' => [
                'Authorization' => "Basic {$this->getAuthBase64Token()}",
                'Content-Type' => 'application/json'
            ]
        ]);
    }

    /**
     * @return \App\Builder\EndpointBuilder
     */
    public function builder(): EndpointBuilder
    {
        return new EndpointBuilder($this);
    }

    /**
     * @return string
     */
    protected function getAuthBase64Token(): string
    {
        return base64_encode("{$this->username}:{$this->password}");
    }
}