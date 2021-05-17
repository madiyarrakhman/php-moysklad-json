<?php


namespace App\Endpoints;


use App\ApiClient;
use App\Interfaces\EndpointInterface;
use App\Interfaces\ModelInterface;
use App\Models\EntityList;
use App\Models\Model;
use GuzzleHttp\Exception\GuzzleException;
use JMS\Serializer\SerializerBuilder;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\VarDumper\VarDumper;

/**
 * Class Endpoint
 * @package App\Endpoints
 */
class Endpoint implements EndpointInterface
{
    /**
     * @var string
     */
    protected $endpoint;

    public $modelClass = Model::class;

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
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function request(string $method, string $endpoint, array $options): ResponseInterface
    {
        return $this->apiClient->client->request($method, $endpoint, $options);
    }

    private function getDataFromResponse($response): string
    {
        return $response->getBody()->getContents();
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function get(string $id, array $query = null)
    {
        $response = $this->request('GET', "{$this->endpoint}/$id", ['query' => $query]);
        return $this->deserialize($this->getDataFromResponse($response), $this->modelClass);
    }

    /**
     * @throws \GuzzleHttp\Exception\GuzzleException
     */
    public function getList(array $query = null)
    {
        $response = $this->request('GET', $this->endpoint, ['query' => $query]);
        return $this->deserialize($this->getDataFromResponse($response), EntityList::class);
    }

    public function create(ModelInterface $model)
    {
        $json = $this->serialize($model);
        $response = $this->request('POST', $this->endpoint, [
            'body' => $json
        ]);
        return $this->deserialize($this->getDataFromResponse($response), $this->modelClass);
    }

    public function update(string $id, ModelInterface $model)
    {
        $json = $this->serialize($model);
        $response = $this->request('PUT', "{$this->endpoint}/$id", [
            'body' => $json
        ]);
        return $this->deserialize($this->getDataFromResponse($response), $this->modelClass);
    }

    public function delete(string $id)
    {
        return $this->getDataFromResponse($this->request('DELETE', "{$this->endpoint}/$id", []));
    }

    private function serialize(ModelInterface $model)
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->serialize($model, 'json');
    }

    private function deserialize(string $json, string $modelClassName)
    {
        $serializer = SerializerBuilder::create()->build();
        return $serializer->deserialize($json, $modelClassName, 'json');
    }
}