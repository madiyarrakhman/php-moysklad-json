<?php


namespace CosmoStar\MoySklad\Endpoints;


use CosmoStar\MoySklad\Builder\Traits\CreateEntityMethod;
use CosmoStar\MoySklad\Builder\Traits\GetEntityMethod;
use CosmoStar\MoySklad\Builder\Traits\GetListEntityMethod;
use CosmoStar\MoySklad\Builder\Traits\UpdateEntityMethod;
use CosmoStar\MoySklad\Entity\CounterpartyEntity;
use CosmoStar\MoySklad\Entity\CounterpartyListEntity;

class Counterparty extends Endpoint
{
    use GetEntityMethod;
    use GetListEntityMethod;
    use CreateEntityMethod;
    use UpdateEntityMethod;

    protected $endpoint = 'entity/counterparty';
    protected $entityClass = CounterpartyEntity::class;
    protected $entityListClass = CounterpartyListEntity::class;
}