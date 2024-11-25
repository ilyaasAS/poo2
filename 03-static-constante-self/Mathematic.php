<?php

class Mathematic
{
    public static function addition(float $x, float $y): float
    {
        return $x + $y;
    }

    public static function soustraction(float $x, float $y): float
    {
        return $x - $y;
    }

    public static function multiplication(float $x, float $y): float
    {
        return $x * $y;
    }

    public static function division(float $x, float $y): float | bool
    {
        if (self::isNull($y)) {
            return false;
        }

        return $x / $y;
    }

    private static function isNull(int $x): bool
    {
        return $x === 0;
    }
}
