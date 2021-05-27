<?php


namespace App\Interfaces;


interface EntityInterface
{
    public function getId(): string;

    public function getMeta(): array;
}