<?php


namespace CosmoStar\MoySklad\Entity;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class MetaEntity
{
    /**
     * @Type("string")
     * @Accessor(getter="getHref")
     */
    private $href;
    /**
     * @Type("string")
     * @SerializedName("metadataHref")
     * @Accessor(getter="getMetadataHref")
     */
    private $metadataHref;
    /**
     * @Type("string")
     * @Accessor(getter="getType")
     */
    private $type;
    /**
     * @Type("string")
     * @SerializedName("mediaType")
     * @Accessor(getter="getMediaType")
     */
    private $mediaType;
    /**
     * @Type("string")
     * @SerializedName("uuidHref")
     * @Accessor(getter="getUuidHref")
     */
    private $uuidHref;

    /**
     * @return string
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @return string
     */
    public function getMetadataHref(): string
    {
        return $this->metadataHref;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * @return string
     */
    public function getMediaType(): string
    {
        return $this->mediaType;
    }

    /**
     * @return string
     */
    public function getUuidHref()
    {
        return $this->uuidHref;
    }
}