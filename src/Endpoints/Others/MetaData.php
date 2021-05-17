<?php


namespace App\Endpoints\Others;


use App\Endpoints\Endpoint;

class MetaData extends Endpoint
{
    protected $endpoint = 'entity/metadata';

    public function getCustomerOrderMetaDataList(array $query = null)
    {
        $this->endpoint = 'entity/customerorder/metadata';
        return $this->getList($query);
    }
}