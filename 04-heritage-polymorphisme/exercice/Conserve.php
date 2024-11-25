<?php

class Conserve extends Article
{
    private array $listExcipient;

    public function __construct(string $name, float $price, array $listExcipient)
    {
        parent::__construct($name, $price);
        $this->listExcipient = $listExcipient;
    }

    public function displayProduct(): string
    {
        return parent::displayProduct() . " La liste des excipients est " . implode(' / ', $this->listExcipient);
    }

    /**
     * @return array
     */
    public function getListExcipient(): array
    {
        return $this->listExcipient;
    }

    /**
     * @param array $listExcipient
     * 
     * @return self
     */
    public function setListExcipient(array $listExcipient): self
    {
        $this->listExcipient = $listExcipient;

        return $this;
    }
}
