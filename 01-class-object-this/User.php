<?php

// Une classe est un modèle qui permet de créer des objets.
// Une classe c'est plan de construction d'objets.
// Une classe est composée de propriétés et de méthodes.
// Une classe c'est un modèle de données.

class User
{
    // Une propriété est une variable définie dans une classe.
    // Une méthode est une fonction définié dans une classe.

    public string $firstName;

    public string $lastName;

    // creer une methode identity
    // retourne le nom et le prenom de user

    public function identity(): string
    {
        return "$this->firstName $this->lastName";
    }

    public function hello(): void
    {
        echo "Bonjour " . $this->identity() . '<br>';
    }
}
