<?php


namespace App\Models\Entities;

use JMS\Serializer\Annotation\Type;

class Service extends \App\Models\Model
{
    /**
     * @Type("string")
     */
    public $name;
}