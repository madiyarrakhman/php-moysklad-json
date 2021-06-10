<?php


namespace CosmoStar\MoySklad\Entity\Document;


use CosmoStar\MoySklad\Entity\Entity;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\Accessor;
use JMS\Serializer\Annotation\SerializedName;

class InternalOrderEntity extends Entity
{
    /**
     * @Type("string")
     * @Accessor(getter="getName")
     */
    private $name;
    /**
     * @Type("string")
     * @SerializedName("syncId")
     * @Accessor(getter="getSyncId")
     */
    private $syncId;
    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     * @Accessor(getter="getUpdated")
     */
    private $updated;
    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     * @Accessor(getter="getDeleted")
     */
    private $deleted;
    /**
     * @Type("string")
     * @Accessor (getter="getDescription")
     */
    private $description;
    /**
     * @Type("string")
     * @Accessor(getter="getCode")
     */
    private $code;
    /**
     * @Type("string")
     * @SerializedName("externalCode")
     * @Accessor(getter="getExternalCode")
     */
    private $externalCode;
    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     * @Accessor(getter="getMoment")
     */
    private $moment;
    /**
     * @Type("bool")
     * @Accessor(getter="getApplicable")
     */
    private $applicable;
    /**
     * @Type("bool")
     * @SerializedName("vatEnabled")
     * @Accessor(getter="getVatEnabled")
     */
    private $vatEnabled;
    /**
     * @Type("bool")
     * @SerializedName("vatIncluded")
     * @Accessor(getter="getVatIncluded")
     */
    private $vatIncluded;
    /**
     * @Type("array")
     * @Accessor(getter="getProject")
     */
    private $project;
    /**
     * @Type("integer")
     * @Accessor(getter="getSum")
     */
    private $sum;
    /**
     * @Type("array")
     * @Accessor(getter="getRate")
     */
    private $rate;
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
     * @Type("CosmoStar\MoySklad\Entity\OrganizationEntity")
     * @Accessor(getter="getOrganization")
     */
    private $organization;
    /**
     * @Type("CosmoStar\MoySklad\Entity\StoreEntity")
     * @Accessor(getter="getStore")
     */
    private $store;
    /**
     * @Type("CosmoStar\MoySklad\Entity\StateEntity")
     * @Accessor(getter="getState")
     */
    private $state;
    /**
     * @Type("iterable<CosmoStar\MoySklad\Entity\AttributeEntity>")
     * @Accessor(getter="getAttributes")
     */
    private $attributes;
    /**
     * @Type("array")
     * @Accessor(getter="getFiles")
     */
    private $files;
    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     * @Accessor(getter="getCreated")
     */
    private $created;
    /**
     * @Type("bool")
     * @Accessor(getter="getPrinted")
     */
    private $printed;
    /**
     * @Type("bool")
     * @Accessor(getter="getPublished")
     */
    private $published;
    /**
     * @Type("float")
     * @SerializedName("vatSum")
     * @Accessor(getter="getVatSum")
     */
    private $vatSum;
    /**
     * @Type("array")
     * @Accessor(getter="getPositions")
     */
    private $positions;
    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     * @SerializedName("deliveryPlannedMoment")
     * @Accessor(getter="getDeliveryPlannedMoment")
     */
    private $deliveryPlannedMoment;
    /**
     * @Type("array")
     * @SerializedName("purchaseOrders")
     * @Accessor(getter="getPurchaseOrders")
     */
    private $purchaseOrders;
    /**
     * @Type("array")
     * @Accessor(getter="getMoves")
     */
    private $moves;

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
    public function getDeleted()
    {
        return $this->deleted;
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
    public function getMoment()
    {
        return $this->moment;
    }

    /**
     * @return mixed
     */
    public function getApplicable()
    {
        return $this->applicable;
    }

    /**
     * @return mixed
     */
    public function getVatEnabled()
    {
        return $this->vatEnabled;
    }

    /**
     * @return mixed
     */
    public function getVatIncluded()
    {
        return $this->vatIncluded;
    }

    /**
     * @return mixed
     */
    public function getProject()
    {
        return $this->project;
    }

    /**
     * @return mixed
     */
    public function getSum()
    {
        return $this->sum;
    }

    /**
     * @return mixed
     */
    public function getRate()
    {
        return $this->rate;
    }

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
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * @return mixed
     */
    public function getStore()
    {
        return $this->store;
    }

    /**
     * @return mixed
     */
    public function getState()
    {
        return $this->state;
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
    public function getFiles()
    {
        return $this->files;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return mixed
     */
    public function getPrinted()
    {
        return $this->printed;
    }

    /**
     * @return mixed
     */
    public function getPublished()
    {
        return $this->published;
    }

    /**
     * @return mixed
     */
    public function getVatSum()
    {
        return $this->vatSum;
    }

    /**
     * @return mixed
     */
    public function getPositions()
    {
        return $this->positions;
    }

    /**
     * @return mixed
     */
    public function getDeliveryPlannedMoment()
    {
        return $this->deliveryPlannedMoment;
    }

    /**
     * @return mixed
     */
    public function getPurchaseOrders()
    {
        return $this->purchaseOrders;
    }

    /**
     * @return mixed
     */
    public function getMoves()
    {
        return $this->moves;
    }
}