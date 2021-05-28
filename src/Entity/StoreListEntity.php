<?php


namespace MadiyarRakhman\MoySklad\Entity;


use JMS\Serializer\Annotation\Type;

final class StoreListEntity extends EntityList
{
    /**
     * @Type("iterable<MadiyarRakhman\MoySklad\Entity\StoreEntity>")
     */
    protected $rows;
}