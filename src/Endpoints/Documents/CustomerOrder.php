<?php


namespace App\Endpoints\Documents;


use App\Endpoints\Endpoint;
use App\Entity\Document\CustomerOrderEntity;
use App\Entity\Document\CustomerOrderListEntity;

/**
 * Class CustomerOrder
 * @package App\Endpoints\Documents
 */
class CustomerOrder extends Endpoint
{
    protected $endpoint = 'entity/customerorder';

    protected $entityClass = CustomerOrderEntity::class;

    protected $entityListClass = CustomerOrderListEntity::class;
}