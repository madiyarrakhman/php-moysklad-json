<?php


namespace App\Endpoints\Entities;


use App\Endpoints\Endpoint;

class Service extends Endpoint
{
    protected $endpoint = 'entity/service';

    public $modelClass = \App\Models\Entities\Service::class;
}