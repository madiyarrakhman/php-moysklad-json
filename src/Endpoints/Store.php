<?php


namespace MadiyarRakhman\MoySklad\Endpoints;


use MadiyarRakhman\MoySklad\Builder\Traits\CreateEntityMethod;
use MadiyarRakhman\MoySklad\Builder\Traits\GetEntityMethod;
use MadiyarRakhman\MoySklad\Builder\Traits\GetListEntityMethod;
use MadiyarRakhman\MoySklad\Builder\Traits\UpdateEntityMethod;
use MadiyarRakhman\MoySklad\Entity\StoreEntity;
use MadiyarRakhman\MoySklad\Entity\StoreListEntity;

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