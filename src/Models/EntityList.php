<?php


namespace App\Models;

use JMS\Serializer\Annotation\Type;

class EntityList
{
    /**
     * @Type("App\Models\MetaArray")
     */
    public $meta;

    /**
     * @Type("array")
     */
    public $context;

    /**
     * @Type("array")
     */
    public $rows;
}