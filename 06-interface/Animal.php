<?php

abstract class Animal
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var int
     */
    private int $age;

    /**
     * @var int
     */
    private int $nbPaws;

    /**
     * @var array
     */
    private array $listFood;

    public function __construct(string $name, int $age, int $nbPaws, array $listFood)
    {
        $this->name = $name;
        $this->age = $age;
        $this->nbPaws = $nbPaws;
        $this->listFood = $listFood;
    }

    /**
     * @return  string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param  string  $name
     *
     * @return  self
     */
    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of age
     *
     * @return  int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    /**
     * @param  int  $age
     *
     * @return  self
     */
    public function setAge(int $age): self
    {
        $this->age = $age;

        return $this;
    }

    /**
     * @return  int
     */
    public function getNbPaws(): int
    {
        return $this->nbPaws;
    }

    /**
     * @param  int  $nbPaws
     *
     * @return  self
     */
    public function setNbPaws(int $nbPaws): self
    {
        $this->nbPaws = $nbPaws;

        return $this;
    }

    /**
     * @return  array
     */
    public function getListFood(): array
    {
        return $this->listFood;
    }

    /**
     * @param  array  $listFood
     *
     * @return  self
     */
    public function setListFood(array $listFood): self
    {
        $this->listFood = $listFood;

        return $this;
    }
}
