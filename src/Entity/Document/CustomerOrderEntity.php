<?php


namespace MadiyarRakhman\MoySklad\Entity\Document;


use MadiyarRakhman\MoySklad\Entity\Entity;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class CustomerOrderEntity extends Entity
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
     * @Type("MadiyarRakhman\MoySklad\Entity\StateEntity")
     */
    public $state;
    /**
     * @Type("MadiyarRakhman\MoySklad\Entity\AgentEntity")
     */
    public $agent;
    /**
     * @Type("MadiyarRakhman\MoySklad\Entity\OrganizationEntity")
     */
    public $organization;
    /**
     * @Type("array")
     * @SerializedName("organizationAccount")
     */
    public $organizationAccount;
    /**
     * @Type("MadiyarRakhman\MoySklad\Entity\StoreEntity")
     */
    public $store;
    /**
     * @Type("array")
     */
    public $attributes;
    /**
     * @Type("array")
     */
    public $positions;
}