<?php


namespace CosmoStar\MoySklad\Entity;


use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class ProductEntity extends Entity
{
    /**
     * @Type("array")
     * @Accessor(getter="getOwner")
     */
    private $owner;
    /**
     * @Type("bool")
     * @Accessor(getter="getShared")
     */
    private $shared;
    /**
     * @Type("array")
     * @Accessor(getter="getGroup")
     */
    private $group;
    /**
     * @Type("string")
     * @Accessor(getter="getSyncId")
     */
    private $syncId;
    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     * @Accessor(getter="getUpdated")
     */
    private $updated;
    /**
     * @Type("string")
     * @Accessor(getter="getName")
     */
    private $name;
    /**
     * @Type("string")
     * @Accessor(getter="getDescription")
     */
    private $description;
    /**
     * @Type("string")
     * @Accessor(getter="getCode")
     */
    private $code;
    /**
     * @Type("string")
     * @Accessor(getter="getExternalCode")
     * @SerializedName("externalCode")
     */
    private $externalCode;
    /**
     * @Type("bool")
     * @Accessor(getter="getArchived")
     */
    private $archived;
    /**
     * @Type("string")
     * @Accessor(getter="getPathName")
     * @SerializedName("pathName")
     */
    private $pathName;
    /**
     * @Type("int")
     * @Accessor(getter="getVat")
     */
    private $vat;
    /**
     * @Type("int")
     * @Accessor(getter="getEffectiveVat")
     * @SerializedName("effectiveVat")
     */
    private $effectiveVat;
    /**
     * @Type("array")
     * @Accessor(getter="getProductFolder")
     * @SerializedName("productFolder")
     */
    private $productFolder;
    /**
     * @Type("array")
     * @Accessor(getter="getUom")
     */
    private $uom;
    /**
     * @Type("array")
     * @Accessor(getter="getImages")
     */
    private $images;
    /**
     * @Type("array")
     * @Accessor(getter="getMinPrice")
     * @SerializedName("minPrice")
     */
    private $minPrice;
    /**
     * @Type("array")
     * @Accessor(getter="getSalePrices")
     * @SerializedName("salePrices")
     */
    private $salePrices;
    /**
     * @Type("array")
     * @Accessor(getter="getBuyPrice")
     * @SerializedName("buyPrice")
     */
    private $buyPrice;
    /**
     * @Type("array")
     * @Accessor(getter="getSupplier")
     */
    private $supplier;
    /**
     * @Type("array")
     * @Accessor(getter="getAttributes")
     */
    private $attributes;
    /**
     * @Type("array")
     * @Accessor(getter="getCountry")
     */
    private $country;
    /**
     * @Type("string")
     * @Accessor(getter="getArticle")
     */
    private $article;
    /**
     * @Type("int")
     * @Accessor(getter="getWeight")
     */
    private $weight;
    /**
     * @Type("int")
     * @Accessor(getter="getVolume")
     */
    private $volume;
    /**
     * @Type("array")
     * @Accessor(getter="getPacks")
     */
    private $packs;
    /**
     * @Type("array")
     * @Accessor(getter="getAlcoholic")
     */
    private $alcoholic;
    /**
     * @Type("int")
     * @Accessor(getter="getVariantsCount")
     * @SerializedName("variantsCount")
     */
    private $variantsCount;
    /**
     * @Type("int")
     * @Accessor(getter="getMinimumBalance")
     * @SerializedName("minimumBalance")
     */
    private $minimumBalance;
    /**
     * @Type("bool")
     * @Accessor(getter="getIsSerialTrackable")
     * @SerializedName("isSerialTrackable")
     */
    private $isSerialTrackable;
    /**
     * @Type("array")
     * @Accessor(getter="getThings")
     */
    private $things;
    /**
     * @Type("array")
     * @Accessor(getter="getBarcodes")
     */
    private $barcodes;
    /**
     * @Type("bool")
     * @Accessor(getter="getDiscountProhibited")
     * @SerializedName("discountProhibited")
     */
    private $discountProhibited;
    /**
     * @Type("string")
     * @Accessor(getter="getTnved")
     */
    private $tnved;
    /**
     * @Type("bool")
     * @Accessor(getter="getPartialDisposal")
     * @SerializedName("partialDisposal")
     */
    private $partialDisposal;
    /**
     * @Type("string")
     * @Accessor(getter="getTrackingType")
     * @SerializedName("trackingType")
     */
    private $trackingType;
    /**
     * @Type("string")
     * @Accessor(getter="getPaymentItemType")
     * @SerializedName("paymentItemType")
     */
    private $paymentItemType;
    /**
     * @Type("string")
     * @Accessor(getter="getTaxSystem")
     * @SerializedName("taxSystem")
     */
    private $taxSystem;
    /**
     * @Type("string")
     * @Accessor(getter="getPpeType")
     * @SerializedName("ppeType")
     */
    private $ppeType;
    /**
     * @Type("array")
     * @Accessor(getter="getFiles")
     */
    private $files;

    /**
     * @return mixed
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @return mixed
     */
    public function getShared()
    {
        return $this->shared;
    }

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @return mixed
     */
    public function getSyncId()
    {
        return $this->syncId;
    }

    /**
     * @return mixed
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return mixed
     */
    public function getExternalCode()
    {
        return $this->externalCode;
    }

    /**
     * @return mixed
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * @return mixed
     */
    public function getPathName()
    {
        return $this->pathName;
    }

    /**
     * @return mixed
     */
    public function getVat()
    {
        return $this->vat;
    }

    /**
     * @return mixed
     */
    public function getEffectiveVat()
    {
        return $this->effectiveVat;
    }

    /**
     * @return mixed
     */
    public function getProductFolder()
    {
        return $this->productFolder;
    }

    /**
     * @return mixed
     */
    public function getUom()
    {
        return $this->uom;
    }

    /**
     * @return mixed
     */
    public function getImages()
    {
        return $this->images;
    }

    /**
     * @return mixed
     */
    public function getMinPrice()
    {
        return $this->minPrice;
    }

    /**
     * @return mixed
     */
    public function getSalePrices()
    {
        return $this->salePrices;
    }

    /**
     * @return mixed
     */
    public function getBuyPrice()
    {
        return $this->buyPrice;
    }

    /**
     * @return mixed
     */
    public function getSupplier()
    {
        return $this->supplier;
    }

    /**
     * @return mixed
     */
    public function getAttributes()
    {
        return $this->attributes;
    }

    /**
     * @return mixed
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @return mixed
     */
    public function getPacks()
    {
        return $this->packs;
    }

    /**
     * @return mixed
     */
    public function getAlcoholic()
    {
        return $this->alcoholic;
    }

    /**
     * @return mixed
     */
    public function getVariantsCount()
    {
        return $this->variantsCount;
    }

    /**
     * @return mixed
     */
    public function getMinimumBalance()
    {
        return $this->minimumBalance;
    }

    /**
     * @return mixed
     */
    public function getIsSerialTrackable()
    {
        return $this->isSerialTrackable;
    }

    /**
     * @return mixed
     */
    public function getThings()
    {
        return $this->things;
    }

    /**
     * @return mixed
     */
    public function getBarcodes()
    {
        return $this->barcodes;
    }

    /**
     * @return mixed
     */
    public function getDiscountProhibited()
    {
        return $this->discountProhibited;
    }

    /**
     * @return mixed
     */
    public function getTnved()
    {
        return $this->tnved;
    }

    /**
     * @return mixed
     */
    public function getPartialDisposal()
    {
        return $this->partialDisposal;
    }

    /**
     * @return mixed
     */
    public function getTrackingType()
    {
        return $this->trackingType;
    }

    /**
     * @return mixed
     */
    public function getPaymentItemType()
    {
        return $this->paymentItemType;
    }

    /**
     * @return mixed
     */
    public function getTaxSystem()
    {
        return $this->taxSystem;
    }

    /**
     * @return mixed
     */
    public function getPpeType()
    {
        return $this->ppeType;
    }

    /**
     * @return mixed
     */
    public function getFiles()
    {
        return $this->files;
    }
}