<?php


namespace CosmoStar\MoySklad\Entity;


use JMS\Serializer\Annotation\Type;

class OrganizationAccountListEntity extends EntityList
{
    /**
     * @Type("iterable<CosmoStar\MoySklad\Entity\OrganizationAccountEntity>")
     */
    protected $rows;
}