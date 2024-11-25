<?php

include_once 'Player.php';
include_once 'Warrior.php';
include_once 'Mage.php';

$player = new Warrior('hulk', 12);

$wizzard = new Mage('Merlin', 300);

echo $wizzard->getLife();
echo $wizzard->hit();
echo $wizzard->getLife();
