<?php

class Dog extends Animal
{
    /**
     * @var string
     */
    private string $pedigree;

    public function __construct(string $name, int $age, string $pedigree)
    {
        parent::__construct($name, $age);
        $this->pedigree = $pedigree;
    }

    /**
     * @return string
     */
    public function getPedigree(): string
    {
        return $this->pedigree;
    }

    /**
     * @param string $pedigree
     *
     * @return self
     */
    public function setPedigree(string $pedigree): self
    {
        $this->pedigree = $pedigree;

        return $this;
    }

    /**
     * @return string
     */
    public function description(): string
    {
        return  parent::description() . " et mon pedigree est : $this->pedigree";
    }
}
