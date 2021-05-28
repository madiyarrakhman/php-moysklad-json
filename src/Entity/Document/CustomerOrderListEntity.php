<?php


namespace MadiyarRakhman\MoySklad\Entity\Document;


use MadiyarRakhman\MoySklad\Entity\EntityList;
use JMS\Serializer\Annotation\Type;

class CustomerOrderListEntity extends EntityList
{
    /**
     * @Type("iterable<MadiyarRakhman\MoySklad\Entity\Document\CustomerOrderEntity>")
     */
    protected $rows;
}