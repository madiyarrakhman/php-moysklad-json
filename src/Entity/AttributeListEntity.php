<?php


namespace CosmoStar\MoySklad\Entity;


use JMS\Serializer\Annotation\Type;

class AttributeListEntity extends EntityList
{
    /**
     * @Type("iterable<CosmoStar\MoySklad\Entity\AttributeEntity>")
     */
    protected $rows;
}