<?php


namespace CosmoStar\MoySklad\Endpoints\Documents;


use CosmoStar\MoySklad\Builder\Traits\CreateEntityMethod;
use CosmoStar\MoySklad\Builder\Traits\GetEntityMethod;
use CosmoStar\MoySklad\Builder\Traits\GetListEntityMethod;
use CosmoStar\MoySklad\Builder\Traits\GetMetaDataEntity;
use CosmoStar\MoySklad\Builder\Traits\UpdateEntityMethod;
use CosmoStar\MoySklad\Endpoints\Endpoint;
use CosmoStar\MoySklad\Entity\Document\InternalOrderEntity;
use CosmoStar\MoySklad\Entity\Document\InternalOrderListEntity;

class InternalOrder extends Endpoint
{
    use GetEntityMethod;
    use GetListEntityMethod;
    use UpdateEntityMethod;
    use CreateEntityMethod;
    use GetMetaDataEntity;

    protected $endpoint = 'entity/internalorder';
    protected $entityClass = InternalOrderEntity::class;
    protected $entityListClass = InternalOrderListEntity::class;
}