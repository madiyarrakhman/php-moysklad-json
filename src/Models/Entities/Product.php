<?php


namespace App\Models\Entities;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class Product extends \App\Models\Model
{
    /**
     * @Type("string")
     */
    public $name;
}