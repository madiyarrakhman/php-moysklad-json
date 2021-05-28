<?php


namespace App\Builder;


use App\ApiClient;
use App\Endpoints\Documents\CustomerOrder;
use App\Endpoints\CustomerOrderState;

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
     * @return CustomerOrder
     */
    public function customerOrder(): CustomerOrder
    {
        return new CustomerOrder($this->apiClient);
    }

    /**
     * @return CustomerOrderState
     */
    public function state(): CustomerOrderState
    {
        return new CustomerOrderState($this->apiClient);
    }
}