<?php

/*
    Une class abstraite est une classe qui ne peut pas être instanciée.
    Une classe abstraite est une classe qui peut contenir des méthodes abstraites (qui ne contiennet qu'une signature). Ces méthodes abstraites doivent être implémentées dans les classes enfants.
*/
abstract class Player
{
    private string $name;

    protected int $life = 100;

    private int $score = 0;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getLife(): int
    {
        return $this->life;
    }

    public function setLife(int $life): self
    {
        $this->life = $life;

        return $this;
    }

    public function getScore(): int
    {
        return $this->score;
    }

    public function setScore(int $score): self
    {
        $this->score = $score;

        return $this;
    }

    public function hit()
    {
        $this->life = $this->life - 10;
    }

    // Une méthode abstraite est une méthode qui ne contient que la signature de la méthode, sans son implémentation.
    // Les classes enfants doivent implémenter les méthodes abstraites.
    // abstract public function move();
}
