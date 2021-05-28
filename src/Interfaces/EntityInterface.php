<?php


namespace MadiyarRakhman\MoySklad\Interfaces;


use MadiyarRakhman\MoySklad\Entity\MetaEntity;

interface EntityInterface
{
    public function getId();

    public function getMeta();
}