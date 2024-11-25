<?php

// VISIBILITE (public, private, protected)
//    - public : accessible depuis l'exterieur et l'interieur de la classe.
//    - private : accessible uniquement depuis l'interieur de la classe.

// Encapsulation est le fait de rendre privé les propriétés ou les methodes d'une classe
// pour empecher l'exterieur de modifier ou de lire les propriétés d'une classe.
// Pour accéder aux propriétés privées d'une classe, on utilise les getters et les setters.

// Un getter (accesseur) est une methode qui permet de récupérer la valeur d'une propriété privée.
// Un setter (mutateur) est une méthode qui permet de modifier la valeur d'une propriété privée.
class Car
{
    private string $model;

    private string $color;

    private int $yearRelease;

    // Le constructeur est une methode magique qui est appelé automatiquement lors de l'instance d'une classe
    // Le constructeur permet d'initialiser les propriétées d'un objet
    public function __construct($model, $color)
    {
        $this->model = $model;
        $this->color = $color;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel($model)
    {
        $this->model = $model;

        return $this;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;

        return $this;
    }

    public function getYearRelease(): int
    {
        return $this->yearRelease;
    }

    public function setYearRelease($year)
    {
        $this->yearRelease = $year;

        return $this;
    }

    public function displayInformation(): string
    {
        return "Ce véhicule est une $this->model de $this->yearRelease ans et sa couleur est $this->color";
    }
}
