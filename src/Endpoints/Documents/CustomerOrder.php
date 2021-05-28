<?php


namespace App\Endpoints\Documents;


use App\Builder\Traits\CreateEntityMethod;
use App\Builder\Traits\GetEntityMethod;
use App\Builder\Traits\GetListEntityMethod;
use App\Builder\Traits\UpdateEntityMethod;
use App\Endpoints\Endpoint;
use App\Entity\Document\CustomerOrderEntity;
use App\Entity\Document\CustomerOrderListEntity;

/**
 * Class CustomerOrder
 * @package App\Endpoints\Documents
 */
class CustomerOrder extends Endpoint
{
    use GetEntityMethod;
    use GetListEntityMethod;
    use UpdateEntityMethod;
    use CreateEntityMethod;

    protected $endpoint = 'entity/customerorder';

    protected $entityClass = CustomerOrderEntity::class;

    protected $entityListClass = CustomerOrderListEntity::class;
}