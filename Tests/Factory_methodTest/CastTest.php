<?php

use PHPUnit\Framework\TestCase;

use Src\Factory\Cast;

class CastTest extends TestCase
{
    public function testCastIntFromString()
    {
        $cast = new Cast();
        $value = $cast->castValue("int", "rrr");
        $this->assertSame(0, $value);
    }

    public function testCastIntFromInt()
    {
        $cast = new Cast();
        $value = $cast->castValue("int", "5");
        $this->assertSame(5, $value);
    }

    public function testCastIntFromNull()
    {
        $cast = new Cast();
        $value = $cast->castValue("int", null);
        $this->assertSame(0, $value);
    }

    public function testCastStrFromString()
    {
        $cast = new Cast();
        $value = $cast->castValue("string", "string");
        $this->assertSame("string", $value);
    }

    public function testCastStrFromNull()
    {
        $cast = new Cast();
        $value = $cast->castValue("string", null);
        $this->assertSame("", $value);
    }

    public function testCastBoolNull()
    {
        $cast = new Cast();
        $value = $cast->castValue("bool", null);
        $this->assertFalse($value);
    }

    public function testCastBoolNo()
    {
        $cast = new Cast();
        $value = $cast->castValue("bool", "no");
        $this->assertFalse($value);
    }

    public function testCastBool0()
    {
        $cast = new Cast();
        $value = $cast->castValue("bool", "0");
        $this->assertFalse($value);
    }

    public function testCastBoolTrue()
    {
        $cast = new Cast();
        $value = $cast->castValue("bool", "true");
        $this->assertTrue($value);
    }
    

}