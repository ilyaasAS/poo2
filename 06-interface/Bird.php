<?php

class Bird extends Animal
{
    /**
     * @var bool
     */
    private bool $isMigrate;

    public function __construct(string $name, int $age, int $nbPaws, array $listFood, bool $isMigrate)
    {
        parent::__construct($name, $age, $nbPaws, $listFood);
        $this->isMigrate = $isMigrate;
    }

    /**
     * @return  bool
     */
    public function getIsMigrate(): bool
    {
        return $this->isMigrate;
    }

    /**
     * @param  bool  $isMigrate
     *
     * @return  self
     */
    public function setIsMigrate(bool $isMigrate): self
    {
        $this->isMigrate = $isMigrate;

        return $this;
    }

    public function description(): string
    {
        if ($this->isMigrate) {
            return "Je suis un oiseau migrateur";
        }

        return "Je ne suis pas un oiseau migrateur";
    }
}
