<?php


namespace MadiyarRakhman\MoySklad\Entity;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class OrganizationEntity extends Entity
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
}