<?php


namespace MadiyarRakhman\MoySklad\Endpoints;


use MadiyarRakhman\MoySklad\ApiClient;
use MadiyarRakhman\MoySklad\Interfaces\EndpointInterface;
use GuzzleHttp\Exception\GuzzleException;
use JMS\Serializer\SerializerBuilder;
use Psr\Http\Message\ResponseInterface;

/**
 * Class Endpoint
 * @package MadiyarRakhman\MoySklad\Endpoints
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
     * @param string $method
     * @param string $endpoint
     * @param array $options
     * @return ResponseInterface
     * @throws GuzzleException
     */
    public function request(string $method, string $endpoint, array $options): ResponseInterface
    {
        return $this->apiClient->client->request($method, $endpoint, $options);
    }

    /**
     * @param string $json
     * @param string $objectClass
     * @return mixed
     */
    protected function deserialize(string $json, string $objectClass)
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize($json, $objectClass, 'json');
    }

    protected function serialize($data)
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->serialize($data, 'json');
    }
}