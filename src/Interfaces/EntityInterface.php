<?php


namespace App\Interfaces;


use App\Entity\MetaEntity;

interface EntityInterface
{
    public function getId(): string;

    public function getMeta(): MetaEntity;
}