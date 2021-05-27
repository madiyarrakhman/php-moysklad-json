<?php


namespace App\Endpoints;


use App\ApiClient;
use App\Interfaces\EndpointInterface;
use GuzzleHttp\Exception\GuzzleException;
use JMS\Serializer\SerializerBuilder;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Endpoint
 * @package App\Endpoints
 */
abstract class Endpoint implements EndpointInterface
{
    /**
     * @var string
     */
    protected $endpoint;

    /**
     * @var string
     */
    protected $entityClass;

    /**
     * @var string
     */
    protected $entityListClass;

    /**
     * @var ApiClient
     */
    protected $apiClient;

    /**
     * Entity constructor.
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * @throws GuzzleException
     */
    public function request(string $method, string $endpoint, array $options): ResponseInterface
    {
        return $this->apiClient->client->request($method, $endpoint, $options);
    }

    public function get(string $id, array $query = null)
    {
        $response = $this->request('GET', "{$this->endpoint}/$id", ['query' => $query]);
        return $this->deserialize($response->getBody()->getContents(), $this->entityClass);
    }

    public function getList(array $query = null)
    {
        $response = $this->request('GET', $this->endpoint, ['query' => $query]);
        return $this->deserialize($response->getBody()->getContents(), $this->entityListClass);
    }

    private function deserialize(string $json, string $objectClass)
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize($json, $objectClass, 'json');
    }
}