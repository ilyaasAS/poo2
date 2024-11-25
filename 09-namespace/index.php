<?php

use App\Entity\Peugeot;
use App\Entity\Renault;
use App\Entity\User;

include_once './src/Abstract/AbstractVehicule.php';
include_once './src/Interface/EngineInterface.php';
include_once './src/Entity/Peugeot.php';
include_once './src/Entity/Renault.php';
include_once './src/Entity/User.php';

$peugeot404 = new Peugeot();
$renaultSCenic = new Renault();
$rachid = new User();
$rachid->setPseudo('Rachid EDJEKOUANE');


echo $peugeot404->boot() . '<br>';
echo $renaultSCenic->boot() . '<br>';

echo $peugeot404->start($rachid);

echo $renaultSCenic->start($rachid);

// Product::class est une constante magique qui retourne le namespace de la classe
// echo Product::class;
