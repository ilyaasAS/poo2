<?php

class Mage extends Player
{
    private int $mana;

    public function __construct($name, $mana)
    {
        parent::__construct($name);
        $this->mana = $mana;
    }

    public function hit()
    {
        // $this->life = $this->life - 30;
        $this->setLife($this->getLife() - 30);
    }

    public function getMana(): int
    {
        return $this->mana;
    }

    public function setMana(int $mana): self
    {
        $this->mana = $mana;

        return $this;
    }
}
