<?php


namespace CosmoStar\MoySklad\Entity\Report;


use CosmoStar\MoySklad\Entity\Entity;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class StockByStoreEntity extends Entity
{
    /**
     * @Type("array")
     * @Accessor(getter="getStockByStore")
     * @SerializedName("stockByStore")
     */
    private $stockByStore;

    /**
     * @return mixed
     */
    public function getStockByStore()
    {
        return $this->stockByStore;
    }

}