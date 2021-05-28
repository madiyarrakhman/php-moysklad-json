<?php


namespace MadiyarRakhman\MoySklad\Entity;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class StoreEntity extends Entity
{
    /**
     * @Type("string")
     */
    public $name;
    /**
     * @Type("string")
     */
    public $code;
    /**
     * @Type("string")
     * @SerializedName("externalCode")
     */
    public $externalCode;
    /**
     * @Type("string")
     */
    public $address;
    /**
     * @Type("array")
     * @SerializedName("addressFull")
     */
    public $addressFull;
}