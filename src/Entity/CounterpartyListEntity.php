<?php


namespace MadiyarRakhman\MoySklad\Entity;


use JMS\Serializer\Annotation\Type;

class CounterpartyListEntity extends EntityList
{
    /**
     * @Type("iterable<MadiyarRakhman\MoySklad\Entity\CounterpartyEntity>")
     */
    protected $rows;
}