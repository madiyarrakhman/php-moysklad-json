<?php


namespace App\Entity;


use App\Interfaces\EntityInterface;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;

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
     * @Type("array")
     * @Accessor(getter="getMeta")
     */
    private $meta;

    public function getMeta(): array
    {
        return $this->meta;
    }
}