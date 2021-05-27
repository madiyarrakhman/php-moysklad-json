<?php


namespace App\Entity\Document;


use App\Entity\Entity;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class CustomerOrderEntity extends Entity
{
    /**
     * @Type("string")
     * @SerializedName("accountId")
     */
    public $accountId;
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
     * @Type("App\Entity\StateEntity")
     */
    public $state;
    /**
     * @Type("App\Entity\AgentEntity")
     */
    public $agent;
    /**
     * @Type("App\Entity\OrganizationEntity")
     */
    public $organization;
    /**
     * @Type("array")
     * @SerializedName("organizationAccount")
     */
    public $organizationAccount;
    /**
     * @Type("App\Entity\StoreEntity")
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