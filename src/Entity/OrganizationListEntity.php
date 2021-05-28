<?php


namespace CosmoStar\MoySklad\Entity;

use JMS\Serializer\Annotation\Type;

class OrganizationListEntity extends EntityList
{
    /**
     * @Type("iterable<CosmoStar\MoySklad\Entity\OrganizationEntity>")
     */
    protected $rows;
}