<?php


namespace MadiyarRakhman\MoySklad\Builder;


use MadiyarRakhman\MoySklad\ApiClient;
use MadiyarRakhman\MoySklad\Endpoints\Counterparty;
use MadiyarRakhman\MoySklad\Endpoints\Documents\CustomerOrder;
use MadiyarRakhman\MoySklad\Endpoints\Organization;
use MadiyarRakhman\MoySklad\Endpoints\Store;

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

    /**
     * @return Organization
     */
    public function organization(): Organization
    {
        return new Organization($this->apiClient);
    }

    /**
     * @return Counterparty
     */
    public function counterparty(): Counterparty
    {
        return new Counterparty($this->apiClient);
    }

    /**
     * @return Store
     */
    public function store(): Store
    {
        return new Store($this->apiClient);
    }
}