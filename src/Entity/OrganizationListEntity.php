<?php


namespace MadiyarRakhman\MoySklad\Entity;

use JMS\Serializer\Annotation\Type;

class OrganizationListEntity extends EntityList
{
    /**
     * @Type("iterable<MadiyarRakhman\MoySklad\Entity\OrganizationEntity>")
     */
    protected $rows;
}