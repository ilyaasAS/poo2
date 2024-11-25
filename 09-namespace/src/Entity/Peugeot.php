<?php

namespace App\Entity;

use App\Abstract\AbstractVehicule;
use App\Interface\EngineInterface;

class Peugeot extends AbstractVehicule implements EngineInterface
{
    public function getFuel(): string
    {
        return 'essence';
    }

    public function getNbTest(): int
    {
        return parent::getNbTest() + 70;
    }

    public function start(User $user): string
    {
        return "{$user->getPseudo()} a demarré la Peugeot";
    }
}
