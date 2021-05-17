<?php


namespace App\Models;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class Meta
{
    /**
     * @Type("string")
     */
    public $href;

    /**
     * @Type("string")
     * @SerializedName("metadataHref")
     */
    public $metadataHref;

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
     * @Type("string")
     * @SerializedName("uuidHref")
     */
    public $uuidHref;
}