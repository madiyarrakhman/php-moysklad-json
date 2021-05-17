<?php


namespace App\Models;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class MetaArray
{
    /**
     * @Type("string")
     */
    public $href;

    /**
     * @Type("string")
     */
    public $type;

    /**
     * @Type("string")
     * @SerializedName("mediaType")
     */
    public $mediaType;

    /**
     * @Type("int")
     */
    public $size;

    /**
     * @Type("int")
     */
    public $limit;

    /**
     * @Type("int")
     */
    public $offset;
}