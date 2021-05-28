<?php


namespace CosmoStar\MoySklad\Endpoints;


use CosmoStar\MoySklad\Builder\Traits\CreateEntityMethod;
use CosmoStar\MoySklad\Builder\Traits\GetEntityMethod;
use CosmoStar\MoySklad\Builder\Traits\GetListEntityMethod;
use CosmoStar\MoySklad\Builder\Traits\UpdateEntityMethod;
use CosmoStar\MoySklad\Entity\ProductEntity;
use CosmoStar\MoySklad\Entity\ProductListEntity;

class Product extends Endpoint
{
    use GetEntityMethod;
    use GetListEntityMethod;
    use CreateEntityMethod;
    use UpdateEntityMethod;

    protected $endpoint = 'entity/product';
    protected $entityClass = ProductEntity::class;
    protected $entityListClass = ProductListEntity::class;
}