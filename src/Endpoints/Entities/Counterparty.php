<?php


namespace App\Endpoints\Entities;


class Counterparty extends \App\Endpoints\Endpoint
{
    public $endpoint = 'entity/counterparty';

    public $modelClass = \App\Models\Entities\Counterparty::class;
}