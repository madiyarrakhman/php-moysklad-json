<?php


namespace CosmoStar\MoySklad\Entity;


use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class OrganizationAccountEntity extends Entity
{
    /**
     * @Type("boolean")
     * @Accessor(getter="getIsDefault")
     * @SerializedName("isDefault")
     */
    private $isDefault;
    /**
     * @Type("string")
     * @Accessor(getter="getAccountNumber")
     * @SerializedName("accountNumber")
     */
    private $accountNumber;

    /**
     * @return bool
     */
    public function getIsDefault()
    {
        return $this->isDefault;
    }

    /**
     * @return string
     */
    public function getAccountNumber()
    {
        return $this->accountNumber;
    }

}