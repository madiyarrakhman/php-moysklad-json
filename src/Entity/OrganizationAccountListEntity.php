<?php


namespace MadiyarRakhman\MoySklad\Entity;


use JMS\Serializer\Annotation\Type;

class OrganizationAccountListEntity extends EntityList
{
    /**
     * @Type("iterable<MadiyarRakhman\MoySklad\Entity\OrganizationAccountEntity>")
     */
    protected $rows;
}