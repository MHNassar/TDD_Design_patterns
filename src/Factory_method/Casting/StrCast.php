<?php

namespace Src\Factory\Casting;


class StrCast implements ICast
{

    public function cast($value)
    {
        if (!is_null($value)) {
            return $value;
        }
        return "";
    }
}