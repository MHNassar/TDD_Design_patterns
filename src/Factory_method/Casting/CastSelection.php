<?php


namespace Src\Factory\Casting;


class CastSelection
{
    const TYEPS = [
        "int" => IntCast::class,
        "string" => StrCast::class,
        "bool" => BoolCast::class,
    ];

    public function getCastByType($type)
    {
        $class = self::TYEPS[$type];
        return new $class;
    }
}