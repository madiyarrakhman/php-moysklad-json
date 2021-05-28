<?php


namespace MadiyarRakhman\MoySklad\Entity;


use MadiyarRakhman\MoySklad\Interfaces\EntityInterface;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

abstract class Entity implements EntityInterface
{
    /**
     * @Type("string")
     * @Accessor(getter="getId")
     */
    private $id;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @Type("string")
     * @SerializedName("accountId")
     * @Accessor(getter="getAccountId")
     */
    private $accountId;

    public function getAccountId()
    {
        return $this->accountId;
    }

    /**
     * @Type("MadiyarRakhman\MoySklad\Entity\MetaEntity")
     * @Accessor(getter="getMeta")
     */
    private $meta;

    public function getMeta(): MetaEntity
    {
        return $this->meta;
    }
}