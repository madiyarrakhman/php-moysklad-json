<?php


namespace CosmoStar\MoySklad\Builder;


use CosmoStar\MoySklad\ApiClient;
use CosmoStar\MoySklad\Endpoints\Counterparty;
use CosmoStar\MoySklad\Endpoints\Documents\CustomerOrder;
use CosmoStar\MoySklad\Endpoints\Organization;
use CosmoStar\MoySklad\Endpoints\Product;
use CosmoStar\MoySklad\Endpoints\Reports\StockByStore;
use CosmoStar\MoySklad\Endpoints\Store;

/**
 * Class EndpointBuilder
 * @package CosmoStar\MoySklad\Entities
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

    /**
     * @return Product
     */
    public function product(): Product
    {
        return new Product($this->apiClient);
    }

    /**
     * @return StockByStore
     */
    public function stockByStore(): StockByStore
    {
        return new StockByStore($this->apiClient);
    }
}