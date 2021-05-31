<?php


namespace CosmoStar\MoySklad\Entity;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class StoreEntity extends Entity
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
     * @Type("string")
     * @Accessor(getter="getAddress")
     */
    private $address;
    /**
     * @Type("array")
     * @SerializedName("addressFull")
     * @Accessor(getter="getAddressFull")
     */
    private $addressFull;

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
    public function getCode()
    {
        return $this->code;
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
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @return mixed
     */
    public function getAddressFull()
    {
        return $this->addressFull;
    }
}