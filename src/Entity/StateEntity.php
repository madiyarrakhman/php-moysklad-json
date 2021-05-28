<?php


namespace MadiyarRakhman\MoySklad\Entity;

use JMS\Serializer\Annotation\Type;

class StateEntity extends Entity
{
    /**
     * @Type("string")
     */
    public $name;
}