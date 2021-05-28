<?php


namespace CosmoStar\MoySklad\Entity;


use JMS\Serializer\Annotation\Type;

class ProductListEntity extends EntityList
{
    /**
     * @Type("iterable<CosmoStar\MoySklad\Entity\ProductEntity>")
     */
    protected $rows;
}