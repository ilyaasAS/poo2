<?php

/*
    Heritage permet de récupérer les propriétés et méthodes d'une classe parent
    La classe enfant hérite de la classe parent avec le mot clé extends
    le but est de réutiliser le code de la classe parent
*/
class Aliment extends Article
{
    private string $datePeremption;

    public function __construct(string $name, float $price, string $datePeremption)
    {
        parent::__construct($name, $price);
        $this->datePeremption = $datePeremption;
    }

    // * Polymorphisme permet de redéfinir une méthode de la classe parent dans la classe enfant
    public function displayProduct(): string
    {
        // ? On peut appeler la méthode de la classe parent avec parent::nomDeLaMethode()
        return parent::displayProduct() . " et la date de peremption est le $this->datePeremption";
    }
}
