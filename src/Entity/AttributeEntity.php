<?php


namespace MadiyarRakhman\MoySklad\Entity;


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
     * @SerializedName("customerEntityMeta")
     * @Accessor(getter="getCustomerEntityMeta")
     */
    private $customerEntityMeta;
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
    public function getCustomerEntityMeta()
    {
        return $this->customerEntityMeta;
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