<?php

interface SavageAnimalInterface 
{
    public function devour():string;

    public function eatBird(Bird $bird) : string;
}
