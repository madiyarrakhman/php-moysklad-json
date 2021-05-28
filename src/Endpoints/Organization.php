<?php


namespace CosmoStar\MoySklad\Endpoints;


use CosmoStar\MoySklad\Builder\Traits\GetEntityMethod;
use CosmoStar\MoySklad\Builder\Traits\GetListEntityMethod;
use CosmoStar\MoySklad\Entity\OrganizationEntity;
use CosmoStar\MoySklad\Entity\OrganizationListEntity;

class Organization extends Endpoint
{
    use GetEntityMethod;
    use GetListEntityMethod;

    protected $endpoint = 'entity/organization';

    protected $entityClass = OrganizationEntity::class;

    protected $entityListClass = OrganizationListEntity::class;
}