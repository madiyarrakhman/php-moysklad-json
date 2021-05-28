<?php


namespace CosmoStar\MoySklad\Entity;


use JMS\Serializer\Annotation\Type;

class CounterpartyListEntity extends EntityList
{
    /**
     * @Type("iterable<CosmoStar\MoySklad\Entity\CounterpartyEntity>")
     */
    protected $rows;
}