<?php


namespace MadiyarRakhman\MoySklad\Endpoints;


use MadiyarRakhman\MoySklad\Builder\Traits\CreateEntityMethod;
use MadiyarRakhman\MoySklad\Builder\Traits\GetEntityMethod;
use MadiyarRakhman\MoySklad\Builder\Traits\GetListEntityMethod;
use MadiyarRakhman\MoySklad\Builder\Traits\UpdateEntityMethod;
use MadiyarRakhman\MoySklad\Entity\CounterpartyEntity;
use MadiyarRakhman\MoySklad\Entity\CounterpartyListEntity;

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