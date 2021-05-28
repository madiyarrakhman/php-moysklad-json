<?php


namespace MadiyarRakhman\MoySklad\Endpoints\Documents;


use MadiyarRakhman\MoySklad\Builder\Traits\CreateEntityMethod;
use MadiyarRakhman\MoySklad\Builder\Traits\GetEntityMethod;
use MadiyarRakhman\MoySklad\Builder\Traits\GetListEntityMethod;
use MadiyarRakhman\MoySklad\Builder\Traits\UpdateEntityMethod;
use MadiyarRakhman\MoySklad\Endpoints\Endpoint;
use MadiyarRakhman\MoySklad\Entity\Document\CustomerOrderEntity;
use MadiyarRakhman\MoySklad\Entity\Document\CustomerOrderListEntity;

/**
 * Class CustomerOrder
 * @package MadiyarRakhman\MoySklad\Endpoints\Documents
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