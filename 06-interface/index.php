<?php

include_once './Animal.php';
include_once './Bird.php';
include_once './SavageAnimalInterface.php';
include_once './Wolf.php';


$titi = new Bird('titi', 90, 2, ['graine', 'couscous'], true);
echo $titi->description(). '<br>';

$loup = new Wolf('loup garou', 250, 4, ['enfant', 'animaux'], false );

echo $loup->eatBird($titi);
