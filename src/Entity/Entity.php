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

    public function getId(): string
    {
        if ($this->id) {
            return $this->id;
        }
        unset($this->id);
        return '';
    }

    /**
     * @Type("string")
     * @SerializedName("accountId")
     * @Accessor(getter="getAccountId")
     */
    private $accountId;

    public function getAccountId(): string
    {
        if ($this->accountId) {
            return $this->accountId;
        }
        unset($this->accountId);
        return '';
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