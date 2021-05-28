<?php


namespace CosmoStar\MoySklad\Entity;


use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Accessor;

class CounterpartyEntity extends Entity
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
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     * @Accessor(getter="getCreated")
     */
    private $created;
    /**
     * @Type("string")
     * @Accessor(getter="getCompanyType")
     */
    private $companyType;
    /**
     * @Type("string")
     * @Accessor(getter="getPhone")
     */
    private $phone;
    /**
     * @Type("array")
     * @Accessor(getter="getAccounts")
     */
    private $accounts;
    /**
     * @Type("array")
     * @Accessor(getter="getTags")
     */
    private $tags;
    /**
     * @Type("array")
     * @Accessor(getter="getContactpersons")
     */
    private $contactpersons;
    /**
     * @Type("array")
     * @Accessor(getter="getNotes")
     */
    private $notes;
    /**
     * @Type("array")
     * @Accessor(getter="getState")
     */
    private $state;
    /**
     * @Type("float")
     * @Accessor(getter="getSalesAmount")
     * @SerializedName("salesAmount")
     */
    private $salesAmount;
    /**
     * @Type("array")
     * @Accessor(getter="getFiles")
     */
    private $files;

    /**
     * @return array
     */
    public function getOwner()
    {
        return $this->owner;
    }

    /**
     * @return bool
     */
    public function getShared()
    {
        return $this->shared;
    }

    /**
     * @return array
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @return \DateTime
     */
    public function getUpdated()
    {
        return $this->updated;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @return string
     */
    public function getExternalCode()
    {
        return $this->externalCode;
    }

    /**
     * @return bool
     */
    public function getArchived()
    {
        return $this->archived;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @return string
     */
    public function getCompanyType()
    {
        return $this->companyType;
    }

    /**
     * @return string
     */
    public function getPhone()
    {
        return $this->phone;
    }

    /**
     * @return array
     */
    public function getAccounts()
    {
        return $this->accounts;
    }

    /**
     * @return array
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @return array
     */
    public function getContactpersons()
    {
        return $this->contactpersons;
    }

    /**
     * @return array
     */
    public function getNotes()
    {
        return $this->notes;
    }

    /**
     * @return array
     */
    public function getState()
    {
        return $this->state;
    }

    /**
     * @return float
     */
    public function getSalesAmount()
    {
        return $this->salesAmount;
    }

    /**
     * @return array
     */
    public function getFiles()
    {
        return $this->files;
    }
}