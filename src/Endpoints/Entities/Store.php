<?php


namespace App\Endpoints\Entities;


class Store extends \App\Endpoints\Endpoint
{
    public $endpoint = 'entity/store';

    public $modelClass = \App\Models\Entities\Store::class;
}