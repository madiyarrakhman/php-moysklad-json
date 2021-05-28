<?php


namespace CosmoStar\MoySklad\Interfaces;


use CosmoStar\MoySklad\Entity\MetaEntity;

interface EntityInterface
{
    public function getId();

    public function getMeta();
}