<?php


namespace CosmoStar\MoySklad\Entity\Document;


use CosmoStar\MoySklad\Entity\EntityList;
use JMS\Serializer\Annotation\Type;

final class InternalOrderListEntity extends EntityList
{
    /**
     * @Type("iterable<CosmoStar\MoySklad\Entity\Document\InternalOrderEntity>")
     */
    protected $rows;
}