<?php


namespace MadiyarRakhman\MoySklad\Endpoints;


use MadiyarRakhman\MoySklad\Builder\Traits\GetEntityMethod;
use MadiyarRakhman\MoySklad\Builder\Traits\GetListEntityMethod;
use MadiyarRakhman\MoySklad\Entity\OrganizationEntity;
use MadiyarRakhman\MoySklad\Entity\OrganizationListEntity;

class Organization extends Endpoint
{
    use GetEntityMethod;
    use GetListEntityMethod;

    protected $endpoint = 'entity/organization';

    protected $entityClass = OrganizationEntity::class;

    protected $entityListClass = OrganizationListEntity::class;
}