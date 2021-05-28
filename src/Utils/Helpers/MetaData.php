<?php


namespace MadiyarRakhman\MoySklad\Utils\Helpers;


use Symfony\Component\VarDumper\VarDumper;

class MetaData
{
    public static function getByName(array $metadata, string $name)
    {
        $metadata = array_filter($metadata, function ($attr) use ($name) {
            return ($attr->name === $name) ?? $attr;
        });
        $metadata = array_values($metadata);
        return (!empty($metadata)) ? $metadata[0] : [];
    }
}