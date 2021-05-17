<?php


namespace App\Models\Documents;


use App\Models\Model;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class Attribute extends Model
{
    /**
     * @Type("string")
     */
    public $id;

    /**
     * @Type("string")
     */
    public $name;

    /**
     * @Type("string")
     */
    public $type;

//    private $value;
}