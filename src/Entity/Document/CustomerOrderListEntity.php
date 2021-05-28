<?php


namespace CosmoStar\MoySklad\Entity\Document;


use CosmoStar\MoySklad\Entity\EntityList;
use JMS\Serializer\Annotation\Type;

class CustomerOrderListEntity extends EntityList
{
    /**
     * @Type("iterable<CosmoStar\MoySklad\Entity\Document\CustomerOrderEntity>")
     */
    protected $rows;
}