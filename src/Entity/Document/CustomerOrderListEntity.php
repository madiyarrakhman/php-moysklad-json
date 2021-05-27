<?php


namespace App\Entity\Document;


use App\Entity\EntityList;
use JMS\Serializer\Annotation\Type;

class CustomerOrderListEntity extends EntityList
{
    /**
     * @Type("iterable<App\Entity\Document\CustomerOrderEntity>")
     */
    protected $rows;
}