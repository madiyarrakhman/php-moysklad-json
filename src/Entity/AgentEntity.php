<?php


namespace MadiyarRakhman\MoySklad\Entity;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class AgentEntity extends Entity
{
    /**
     * @Type("string")
     */
    public $name;

    /**
     * @Type("string")
     * @SerializedName("externalCode")
     */
    public $externalCode;

    /**
     * @Type("string")
     * @SerializedName("companyType")
     */
    public $companyType;

    /**
     * @Type("string")
     */
    public $phone;
}