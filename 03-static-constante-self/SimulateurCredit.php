<?php

class SimulateurCredit
{
    private static float $taux = 20.5;

    private const TVA = 20.5;

    public static function calculInteret(int $pret): float
    {
        return self::TVA * $pret;
    }
}
