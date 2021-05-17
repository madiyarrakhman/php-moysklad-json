<?php


namespace App\Builder;


use App\ApiClient;
use App\Endpoints\Documents\CustomerOrder;
use App\Endpoints\Endpoint;
use App\Endpoints\Entities\Assortment;
use App\Endpoints\Entities\Counterparty;
use App\Endpoints\Entities\Organization;
use App\Endpoints\Entities\Product;
use App\Endpoints\Entities\Service;
use App\Endpoints\Entities\Store;

/**
 * Class EndpointBuilder
 * @package App\Entities
 * @property ApiClient $apiClient
 */
class EndpointBuilder
{
    /**
     * @var \App\ApiClient
     */
    public $apiClient;

    /**
     * EndpointBuilder constructor.
     * @param \App\ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    /**
     * @return \App\Endpoints\Endpoint
     */
    public function endpoint(): Endpoint
    {
        return new Endpoint($this->apiClient);
    }

    /**
     * @return \App\Endpoints\Documents\CustomerOrder
     */
    public function customerOrder(): CustomerOrder
    {
        return new CustomerOrder($this->apiClient);
    }

    /**
     * @return \App\Endpoints\Entities\Organization
     */
    public function organization(): Organization
    {
        return new Organization($this->apiClient);
    }

    /**
     * @return \App\Endpoints\Entities\Store
     */
    public function store(): Store
    {
        return new Store($this->apiClient);
    }

    /**
     * @return \App\Endpoints\Entities\Counterparty
     */
    public function counterparty(): Counterparty
    {
        return new Counterparty($this->apiClient);
    }

    /**
     * @return \App\Endpoints\Entities\Assortment
     */
    public function assortment(): Assortment
    {
        return new Assortment($this->apiClient);
    }

    /**
     * @return \App\Endpoints\Entities\Product
     */
    public function product(): Product
    {
        return new Product($this->apiClient);
    }

    /**
     * @return \App\Endpoints\Entities\Service
     */
    public function service(): Service
    {
        return new Service($this->apiClient);
    }
}