<?php


namespace CosmoStar\MoySklad\Entity;


use JMS\Serializer\Annotation\Type;

final class StoreListEntity extends EntityList
{
    /**
     * @Type("iterable<CosmoStar\MoySklad\Entity\StoreEntity>")
     */
    protected $rows;
}