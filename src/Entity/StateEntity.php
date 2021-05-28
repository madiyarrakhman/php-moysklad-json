<?php


namespace App\Entity;

use JMS\Serializer\Annotation\Type;

class StateEntity extends Entity
{
    /**
     * @Type("string")
     */
    public $name;
}