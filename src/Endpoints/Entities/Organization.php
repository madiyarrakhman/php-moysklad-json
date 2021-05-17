<?php


namespace App\Endpoints\Entities;


class Organization extends \App\Endpoints\Endpoint
{
    public $endpoint = 'entity/organization';

    public $modelClass = \App\Models\Entities\Organization::class;
}