<?php


namespace CosmoStar\MoySklad\Entity;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class AgentEntity extends Entity
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
     * @Type("string")
     * @SerializedName("companyType")
     * @Accessor(getter="getCompanyType")
     */
    private $companyType;

    /**
     * @Type("string")
     * @Accessor(getter="getPhone")
     */
    private $phone;

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
    public function getCompanyType()
    {
        return $this->companyType;
    }

    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->phone;
    }
}