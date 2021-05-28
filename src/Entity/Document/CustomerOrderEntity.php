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
     * @Accessor(getter="getName")
     */
    private $name;
    /**
     * @Type("string")
     * @SerializedName("externalCode")
     * @Accessor(getter="getExternalCode")
     */
    private $externalCode;
    /**
     * @Type("MadiyarRakhman\MoySklad\Entity\StateEntity")
     * @Accessor(getter="getState")
     */
    private $state;
    /**
     * @Type("MadiyarRakhman\MoySklad\Entity\AgentEntity")
     * @Accessor(getter="getAgent")
     */
    private $agent;
    /**
     * @Type("MadiyarRakhman\MoySklad\Entity\OrganizationEntity")
     * @Accessor(getter="getOrganization")
     */
    private $organization;
    /**
     * @Type("array")
     * @SerializedName("organizationAccount")
     * @Accessor(getter="getOrganizationAccount")
     */
    private $organizationAccount;
    /**
     * @Type("MadiyarRakhman\MoySklad\Entity\StoreEntity")
     * @Accessor(getter="getStore")
     */
    private $store;
    /**
     * @Type("array")
     * @Accessor(getter="getAttributes")
     */
    private $attributes;
    /**
     * @Type("array")
     * @Accessor(getter="getPositions")
     */
    private $positions;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getExternalCode()
    {
        return $this->externalCode;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return mixed
     */
    public function getAgent()
    {
        return $this->agent;
    }

    /**
     * @return mixed
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @return mixed
     */
    public function getOrganizationAccount()
    {
        return $this->organizationAccount;
    }

    /**
     * @return mixed
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return mixed
     */
    public function getPositions()
    {
        return $this->positions;
    }
}