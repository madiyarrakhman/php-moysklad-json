<?php


namespace MadiyarRakhman\MoySklad\Builder;


use MadiyarRakhman\MoySklad\ApiClient;
use MadiyarRakhman\MoySklad\Endpoints\Documents\CustomerOrder;

/**
 * Class EndpointBuilder
 * @package MadiyarRakhman\MoySklad\Entities
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

    public function organization()
    {

    }

    public function customer()
    {

    }

    public function store()
    {

    }
}