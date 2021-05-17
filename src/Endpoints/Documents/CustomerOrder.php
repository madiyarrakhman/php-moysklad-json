<?php


namespace App\Endpoints\Documents;


use App\Endpoints\Endpoint;

class CustomerOrder extends Endpoint
{
    /**
     * @var string $endpoint
     */
    protected $endpoint = 'entity/customerorder';

    public $modelClass = \App\Models\Documents\CustomerOrder::class;

    /**
     * @param array|null $query
     * @return object
     */
    public function getMetaData(array $query = null): object
    {
        $this->endpoint = 'entity/customerorder/metadata';
        return $this->getList($query);
    }

    /**
     * @param array|null $query
     * @return object
     */
    public function getMetaDataAttributes(array $query = null): object
    {
        $this->endpoint = 'entity/customerorder/metadata/attributes';
        return $this->getList($query);
    }

    /**
     * @param string $id
     * @return object
     */
    public function getMetaDataAttribute(string $id): object
    {
        $this->endpoint = "entity/customerorder/metadata/attributes";
        return $this->get($id);
    }

    /**
     * @param array $query
     * @return object
     */
    public function getMetaDataStates(array $query): object
    {
        $this->endpoint = 'entity/customerorder/metadata/states';
        return $this->getList($query);
    }

    /**
     * @param string $id
     * @return object
     */
    public function getMetaDataState(string $id): object
    {
        $this->endpoint = "entity/customerorder/metadata/states";
        return $this->get($id);
    }
}