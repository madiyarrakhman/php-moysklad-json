<?php


namespace CosmoStar\MoySklad\Entity;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class OrganizationEntity extends Entity
{
    /**
     * @Type("string")
     * @Accessor(getter="getName")
     */
    private $name;
    /**
     * @Type("string")
     * @Accessor(getter="getCode")
     */
    private $code;
    /**
     * @Type("string")
     * @SerializedName("externalCode")
     * @Accessor(getter="getExternalCode")
     */
    private $externalCode;
    /**
     * @Type("CosmoStar\MoySklad\Entity\OrganizationAccountListEntity")
     * @Accessor(getter="getAccounts")
     */
    private $accounts;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getExternalCode()
    {
        return $this->externalCode;
    }

    /**
     * @return array
     */
    public function getAccounts()
    {
        return $this->accounts;
    }
}