<?php

include_once './Car.php';
include_once './Book.php';

// - new est mot clé permettant d'effectuer une instanciation.
// - Une class peut produire plusieurs objets. Nous pouvons donc effectuer plusieurs instanciations 'new'

$car = new Car('Audi', 'bleue');

$car->setYearRelease(2004);
echo $car->displayInformation();
echo $car->getModel();

$book = new Book('Alice aux pays des merveilles','Lewis Carroll', 124, 1865);

$book->read();
$book->title;

