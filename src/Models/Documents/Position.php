<?php


namespace App\Models\Documents;


use App\Models\Model;
use JMS\Serializer\Annotation\Type;
use JMS\Serializer\Annotation\SerializedName;

class Position extends Model
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
     * @Type("double")
     */
    public $quantity;

    /**
     * @Type("double")
     */
    public $price;

    /**
     * @Type("double")
     */
    public $discount;

    /**
     * @Type("int")
     */
    public $vat;

    /**
     * @Type("double")
     */
    public $shipped;

    /**
     * @Type("double")
     */
    public $reserve;

    /**
     * @Type("array")
     */
    public $assortment;
}