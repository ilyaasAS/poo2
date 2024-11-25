<?php

include_once './User.php';
include_once './Animal.php';

$rachid = new User();

$rachid->firstName = 'Rachid ';
$rachid->lastName = 'EDJEKOUANE';
$rachid->hello();

$eleve = new User();
$eleve->firstName = 'John';
$rachid->lastName = 'DOE';
echo $eleve->firstName;


$cat = new Animal();
$cat->name = 'Gros Minet';
$cat->type = 'chat';
echo $cat->eat();
echo $cat->sleep();
