<?php


namespace CosmoStar\MoySklad\Endpoints\Reports;


use CosmoStar\MoySklad\Builder\Traits\GetListEntityMethod;
use CosmoStar\MoySklad\Endpoints\Endpoint;
use CosmoStar\MoySklad\Entity\Report\StockByStoreEntity;
use CosmoStar\MoySklad\Entity\Report\StockByStoreListEntity;

class StockByStore extends Endpoint
{
    use GetListEntityMethod;

    protected $endpoint = 'report/stock/bystore';
    protected $entityClass = StockByStoreEntity::class;
    protected $entityListClass = StockByStoreListEntity::class;
}