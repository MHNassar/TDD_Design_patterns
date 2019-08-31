<?php

namespace Src\Factory\Casting;


class IntCast implements ICast
{

    public function cast($value)
    {
        if (!is_null($value) && is_numeric($value)) {
            return (int)$value;
        }
        return 0;
    }
}