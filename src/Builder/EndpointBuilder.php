<?php


namespace App\Builder;


use App\ApiClient;
use App\Endpoints\Documents\CustomerOrder;
use App\Endpoints\Endpoint;

/**
 * Class EndpointBuilder
 * @package App\Entities
 * @property ApiClient $apiClient
 */
class EndpointBuilder
{
    /**
     * @var ApiClient
     */
    public $apiClient;

    /**
     * EndpointBuilder constructor.
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * @return Endpoint
     */
    public function endpoint(): Endpoint
    {
        return new Endpoint($this->apiClient);
    }

    /**
     * @return CustomerOrder
     */
    public function customerOrder(): CustomerOrder
    {
        return new CustomerOrder($this->apiClient);
    }
}