<?php


namespace App\Models\Entities;

use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class Counterparty extends \App\Models\Model
{
    /**
     * @Type("string")
     */
    public $id;

    /**
     * @Type("string")
     * @SerializedName("accountId")
     */
    public $accountId;

    /**
     * @Type("App\Models\Entities\Employee")
     */
    public $owner;

    /**
     * @Type("boolean")
     */
    public $shared;

    /**
     * @Type("array")
     */
    public $group;

    /**
     * @Type("string")
     * @SerializedName("syncId")
     */
    public $syncId;

    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     */
    public $updated;

    /**
     * @Type("string")
     */
    public $name;

    /**
     * @Type("string")
     */
    public $description;

    /**
     * @Type("string")
     */
    public $code;

    /**
     * @Type("string")
     * @SerializedName("externalCode")
     */
    public $externalCode;

    /**
     * @Type("boolean")
     */
    public $archived;

    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     */
    public $created;

    /**
     * @Type("string")
     */
    public $email;

    /**
     * @Type("string")
     */
    public $phone;

    /**
     * @Type("string")
     */
    public $fax;

    /**
     * @Type("string")
     * @SerializedName("actualAddress")
     */
    public $actualAddress;

    /**
     * @Type("array")
     * @SerializedName("actualAddressFull")
     */
    public $actualAddressFull;

    /**
     * @Type("App\Models\MetaArray")
     */
    public $accounts;

    /**
     * @Type("string")
     * @SerializedName("discountCardNumber")
     */
    public $discountCardNumber;

    /**
     * @Type("App\Models\Entities\State")
     */
    public $state;

    /**
     * @Type("int")
     * @SerializedName("salesAmount")
     */
    public $salesAmount;

    /**
     * @Type("App\Models\Entities\BonusProgram")
     * @SerializedName("bonusProgram")
     */
    public $bonusProgram;

    /**
     * @Type("int")
     * @SerializedName("bonusPoints")
     */
    public $bonusPoints;

    /**
     * @Type("array")
     */
    public $files;
//    public $companyType;
}