<?php

namespace Src\Factory\Casting;


use phpDocumentor\Reflection\Types\Self_;

class BoolCast implements ICast
{


    public function cast($value)
    {
        $falseValues = ["n", "nein", "0", "no"];
        if (!is_null($value) && !in_array($value, $falseValues)) {
            return true;
        }
        return false;
    }
}