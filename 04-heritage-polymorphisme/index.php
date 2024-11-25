<?php

include_once './Animal.php';
include_once './Dog.php';
include_once './exercice/Article.php';
include_once './exercice/Conserve.php';
include_once './exercice/Aliment.php';

$droopy = new Dog('Droopy', 12, 'chien de race');

echo $droopy->description() . '<br>';

$pull = new Article('pull a col à rond', 120.9);
$jean = new Article('jean slim', 99.99);

echo $pull->displayProduct() . '<br>';

$boiteRavioli = new Conserve('Buittoni', 9.99, ['E200', 'E300']);
echo $boiteRavioli->displayProduct() . '<br>';

$salade = new Aliment('salade cesar', 9.99, '12 juin 2024');

echo $salade->displayProduct() . '<br>';
