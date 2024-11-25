<?php

class Article
{
    /**
     * @var string
     */
    private string $name;

    /**
     * @var float
     */
    private float $price;

    public function __construct(string $name, float $price)
    {
        $this->name = $name;
        $this->price = $price;
    }

    /**
     * @return string
     */
    public function displayProduct(): string
    {
        return "Le produit est : $this->name et il coûte $this->price euros";
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
     * @return  float
     */
    public function getPrice(): float
    {
        return $this->price;
    }

    /**
     * @param  float  $price
     *
     * @return  self
     */
    public function setPrice(float $price): self
    {
        $this->price = $price;

        return $this;
    }
}
