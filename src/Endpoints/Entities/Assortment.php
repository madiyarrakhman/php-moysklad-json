<?php


namespace App\Endpoints\Entities;


class Assortment extends \App\Endpoints\Endpoint
{
    public $endpoint = 'entity/assortment';

    public $modelClass = \App\Models\Entities\Assortment::class;
}