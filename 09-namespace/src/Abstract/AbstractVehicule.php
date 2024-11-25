<?php

namespace App\Abstract;

abstract class AbstractVehicule
{

    protected int $nbTest  = 100;

    public function getNbTest()
    {
        return $this->nbTest;
    }

    final public function boot(): string
    {
        return 'Je suis démarré';
    }

    abstract public function getFuel(): string;
}
