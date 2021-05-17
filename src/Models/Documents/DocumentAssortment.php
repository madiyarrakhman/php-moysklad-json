<?php


namespace App\Models\Documents;


use App\Models\Model;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class DocumentAssortment extends Model
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
     * @Type("int")
     */
    public $quantity;

    /**
     * @Type("float")
     */
    public $price;

    /**
     * @Type("int")
     */
    public $discount;

    /**
     * @Type("int")
     */
    public $vat;

    /**
     * @Type("App\Models\Assortment")
     */
    public $assortment;

    /**
     * @Type("string")
     */
    public $pack;

    /**
     * @Type("int")
     */
    public $shipped;

    /**
     * @Type("int")
     */
    public $reserve;
}