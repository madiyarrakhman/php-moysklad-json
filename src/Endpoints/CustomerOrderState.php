<?php


namespace App\Endpoints;


use App\Builder\Traits\GetEntityMethod;
use App\Entity\StateEntity;

class CustomerOrderState extends Endpoint
{
    use GetEntityMethod;

    protected $endpoint = 'entity/customerorder/metadata/states';
    protected $entityClass = StateEntity::class;
}