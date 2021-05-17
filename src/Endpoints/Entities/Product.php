<?php


namespace App\Endpoints\Entities;


class Product extends \App\Endpoints\Endpoint
{
    public $endpoint = 'entity/product';

    public $modelClass = \App\Models\Entities\Product::class;
}