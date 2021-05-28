<?php


namespace CosmoStar\MoySklad\Endpoints;


use CosmoStar\MoySklad\Builder\Traits\CreateEntityMethod;
use CosmoStar\MoySklad\Builder\Traits\GetEntityMethod;
use CosmoStar\MoySklad\Builder\Traits\GetListEntityMethod;
use CosmoStar\MoySklad\Builder\Traits\UpdateEntityMethod;
use CosmoStar\MoySklad\Entity\StoreEntity;
use CosmoStar\MoySklad\Entity\StoreListEntity;

class Store extends Endpoint
{
    use GetEntityMethod;
    use GetListEntityMethod;
    use CreateEntityMethod;
    use UpdateEntityMethod;

    protected $endpoint = 'entity/store';
    protected $entityClass = StoreEntity::class;
    protected $entityListClass = StoreListEntity::class;
}