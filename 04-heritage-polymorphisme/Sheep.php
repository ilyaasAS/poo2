<?php

class Sheep extends Animal
{
    private string $pelage;

    public function getPelage(): string
    {
        return $this->pelage;
    }

    public function setPelage(string $pelage): self
    {
        $this->pelage = $pelage;

        return $this;
    }
}
