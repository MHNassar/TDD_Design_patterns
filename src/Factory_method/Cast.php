<?php

namespace Src\Factory;

use Src\Factory\Casting\CastSelection;

class Cast
{
    private $castType;

    public function __construct()
    {
        $this->castType = new CastSelection();
    }

    public function castValue($type, $value)
    {
        $class = $this->castType->getCastByType($type);
        return $class->cast($value);
    }

}