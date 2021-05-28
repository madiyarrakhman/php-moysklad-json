<?php


namespace MadiyarRakhman\MoySklad\Entity;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class StateEntity extends Entity
{
    /**
     * @Type("string")
     * @Accessor(getter="getName")
     */
    private $name;
    /**
     * @Type("integer")
     * @Accessor(getter="getColor")
     */
    private $color;
    /**
     * @Type("string")
     * @SerializedName("stateType")
     * @Accessor(getter="getStateType")
     */
    private $stateType;
    /**
     * @Type("string")
     * @SerializedName("entityType")
     * @Accessor(getter="getEntityType")
     */
    private $entityType;

    public function getName()
    {
        return $this->name;
    }

    /**
     * @return integer
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return string
     */
    public function getStateType()
    {
        return $this->stateType;
    }

    /**
     * @return string
     */
    public function getEntityType()
    {
        return $this->entityType;
    }

}