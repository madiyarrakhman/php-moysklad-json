<?php


namespace CosmoStar\MoySklad\Entity;


use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class AttributeEntity extends Entity
{
    /**
     * @Type("string")
     * @Accessor(getter="getName")
     */
    private $name;
    /**
     * @Type("array")
     * @SerializedName("customEntityMeta")
     * @Accessor(getter="getСustomEntityMeta")
     */
    private $customEntityMeta;
    /**
     * @Type("string")
     * @Accessor(getter="getType")
     */
    private $type;
    /**
     * @Type("bool")
     * @Accessor(getter="getRequired")
     */
    private $required;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return array
     */
    public function getСustomEntityMeta()
    {
        return $this->customEntityMeta;
    }

    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @return bool
     */
    public function getRequired()
    {
        return $this->required;
    }
}