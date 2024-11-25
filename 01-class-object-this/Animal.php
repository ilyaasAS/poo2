<?php

class Animal
{
    public string $name;

    public string $type;

    public int $age = 0;

    public function eat(): string
    {
        return "$this->type est entrain de manger <br>";
    }

    public function sleep(): string
    {
        return "$this->name est entrain de dormir <br>";
    }
}
