<?php


namespace App\Models\Documents;


use App\Models\Model;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\ReadOnly;
use Doctrine\Common\Annotations\Annotation\Required;
use JMS\Serializer\Annotation\SerializedName;

/**
 * Class CustomerOrder
 * @package App\Models\Documents
 */
class CustomerOrder extends Model
{
    /**
     * @Type("string")
     * @Required
     */
    public $id;

    /**
     * @Type("string")
     * @Required
     * @SerializedName("accountId")
     */
    public $accountId;

    /**
     * @Type("string")
     * @SerializedName("syncId")
     */
    public $syncId;

    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     * @Required
     */
    public $updated;

    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     */
    public $deleted;

    /**
     * @Type("string")
     * @Required
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
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     * @Required
     */
    public $moment;

    /**
     * @Type("boolean")
     * @Required
     */
    public $applicable;

    /**
     * @Type("boolean")
     * @Required
     * @SerializedName("vatEnabled")
     */
    public $vatEnabled;

    /**
     * @Type("boolean")
     * @SerializedName("vatIncluded")
     */
    public $vatIncluded;

    /**
     * @Type("int")
     * @Required
     */
    public $sum;

    /**
     * @Type("App\Models\Entities\Rate")
     * @Required
     */
    public $rate;

    /**
     * @Type("App\Models\Entities\Employee")
     * @Required
     */
    public $owner;

    /**
     * @Type("boolean")
     * @Required
     */
    public $shared;

    /**
     * @Type("array")
     * @Required
     */
    public $group;

    /**
     * @Type("App\Models\Entities\Organization")
     * @Required
     */
    public $organization;

    /**
     * @Type("App\Models\Entities\Counterparty")
     * @Required
     */
    public $agent;

    /**
     * @Type("App\Models\Entities\Store")
     * @Required
     */
    public $store;
    public $contract;

    /**
     * @Type("App\Models\Entities\State")
     */
    public $state;

    /**
     * @Type("App\Models\Entities\OrganizationAccount")
     */
    public $organizationAccount;

    /**
     * @Type("array")
     * @SerializedName("agentAccount")
     */
    public $agentAccount;

    /**
     * <App\Models\Documents\Attribute>
     * @Type("array")
     */
    public $attributes;

    /**
     * @Type("array")
     * @Required
     */
    public $files;

    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     * @Required
     */
    public $created;

    /**
     * @Type("boolean")
     * @Required
     */
    public $printed;

    /**
     * @Type("boolean")
     * @Required
     */
    public $published;

    /**
     * @Type("float")
     * @Required
     * @SerializedName("vatSum")
     */
    public $vatSum;

    /**
     * @Type("array")
     * @Required
     */
    public $positions;

    /**
     * @Type("DateTime<'Y-m-d H:i:s.v'>")
     * @SerializedName("deliveryPlannedMoment")
     */
    public $deliveryPlannedMoment;

    /**
     * @Type("float")
     * @Required
     * @SerializedName("payedSum")
     */
    public $payedSum;

    /**
     * @Type("float")
     * @Required
     * @SerializedName("shippedSum")
     */
    public $shippedSum;

    /**
     * @Type("float")
     * @Required
     * @SerializedName("invoicedSum")
     */
    public $invoicedSum;

    /**
     * @Type("float")
     * @Required
     * @SerializedName("reservedSum")
     */
    public $reservedSum;

    /**
     * @Type("array")
     */
    public $project;

    /**
     * @Type("Enum")
     * @SerializedName("taxSystem")
     */
    public $taxSystem;

    /**
     * @Type("array")
     * @SerializedName("purchaseOrders")
     */
    public $purchaseOrders;

    /**
     * @Type("array")
     */
    public $demands;

    /**
     * @Type("array")
     */
    public $payments;

    /**
     * @Type("array")
     * @SerializedName("invoicesOut")
     */
    public $invoicesOut;
}