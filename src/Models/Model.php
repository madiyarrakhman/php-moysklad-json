<?php


namespace App\Models;

use App\Interfaces\ModelInterface;
use JMS\Serializer\Annotation\Type;
use Doctrine\Common\Annotations\Annotation\Required;

class Model implements ModelInterface
{
    /**
     * @Type("App\Models\Meta")
     * @Required
     */
    public $meta;
}