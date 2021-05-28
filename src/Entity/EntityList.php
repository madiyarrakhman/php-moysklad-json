<?php


namespace MadiyarRakhman\MoySklad\Entity;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;

abstract class EntityList
{
    /**
     * @Type("array")
     */
    private $context;
    /**
     * @Type("array")
     */
    private $meta;
    /**
     * @Type("iterable")
     * @Accessor(getter="getRows")
     */
    protected $rows;

    public function getRows()
    {
        return $this->rows;
    }
}