<?php


namespace CosmoStar\MoySklad\Entity;


use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class MetaDataEntity
{
    /**
     * @Type("array")
     * @Accessor(getter="getMeta")
     */
    private $meta;
    /**
     * @Type("array")
     * @Accessor(getter="getAttributes")
     */
    private $attributes;
    /**
     * @Type("array")
     * @Accessor(getter="getStates")
     */
    private $states;
    /**
     * @Type("bool")
     * @SerializedName("createShared")
     * @Accessor(getter="getCreateShared")
     */
    private $createShared;

    /**
     * @return mixed
     */
    public function getMeta()
    {
        return $this->meta;
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
    public function getStates()
    {
        return $this->states;
    }

    /**
     * @return mixed
     */
    public function getCreateShared()
    {
        return $this->createShared;
    }
}