<?php


class Wolf extends Animal implements SavageAnimalInterface
{
    /**
     * @var bool
     */
    private bool $isLonely;

    public function __construct(string $name, int $age, int $nbPaws, array $listFood, bool $isLonely)
    {
        parent::__construct($name, $age, $nbPaws, $listFood);
        $this->isLonely = $isLonely;
    }

    /**
     * @return  bool
     */
    public function getIsLonely(): bool
    {
        return $this->isLonely;
    }

    /**
     * @param  bool  $isLonely
     *
     * @return  self
     */
    public function setIsLonely(bool $isLonely): self
    {
        $this->isLonely = $isLonely;

        return $this;
    }

    public function devour(): string
    {
        return 'Je viens de manger';
    }

    public function eatBird(Bird $bird): string
    {
        return "Je viens de manger l'oiseau qui s'appelait {$bird->getName() }";
    }
}
