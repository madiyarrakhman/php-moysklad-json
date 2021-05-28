<?php


namespace CosmoStar\MoySklad\Endpoints\Documents;


use CosmoStar\MoySklad\Builder\Traits\CreateEntityMethod;
use CosmoStar\MoySklad\Builder\Traits\GetEntityMethod;
use CosmoStar\MoySklad\Builder\Traits\GetListEntityMethod;
use CosmoStar\MoySklad\Builder\Traits\GetMetaDataEntity;
use CosmoStar\MoySklad\Builder\Traits\UpdateEntityMethod;
use CosmoStar\MoySklad\Endpoints\Endpoint;
use CosmoStar\MoySklad\Entity\Document\CustomerOrderEntity;
use CosmoStar\MoySklad\Entity\Document\CustomerOrderListEntity;

/**
 * Class CustomerOrder
 * @package CosmoStar\MoySklad\Endpoints\Documents
 */
class CustomerOrder extends Endpoint
{
    use GetEntityMethod;
    use GetListEntityMethod;
    use UpdateEntityMethod;
    use CreateEntityMethod;
    use GetMetaDataEntity;

    protected $endpoint = 'entity/customerorder';

    protected $entityClass = CustomerOrderEntity::class;

    protected $entityListClass = CustomerOrderListEntity::class;
}