<?php

namespace App\Entity;

use App\Abstract\AbstractVehicule;

class Renault extends AbstractVehicule
{
    public function getFuel(): string
    {
        return 'diesel';
    }

    public function getNbTest(): int
    {
        return parent::getNbTest() + 30;
    }

    public function start(User $user):string
    {
        return "{$user->getPseudo()} a demarré la Renault";
    }
}
