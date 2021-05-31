<?php


namespace CosmoStar\MoySklad\Entity\Report;


use CosmoStar\MoySklad\Entity\EntityList;
use JMS\Serializer\Annotation\Type;

class StockByStoreListEntity extends EntityList
{
    /**
     * @Type("iterable<CosmoStar\MoySklad\Entity\Report\StockByStoreEntity>")
     */
    protected $rows;
}