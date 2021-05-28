<?php


namespace MadiyarRakhman\MoySklad\Endpoints;


use MadiyarRakhman\MoySklad\Builder\Traits\GetEntityMethod;
use MadiyarRakhman\MoySklad\Entity\StateEntity;

class CustomerOrderState extends Endpoint
{
    use GetEntityMethod;

    protected $endpoint = 'entity/customerorder/metadata/states';
    protected $entityClass = StateEntity::class;
}