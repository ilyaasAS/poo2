<?php

include_once './src/Utils/Autoloader.php';

use App\Abstract\Table;
use App\Entity\Chaise;
use App\Utils\Autoloader;

Autoloader::autoload();

$table = new Table();
$chaise = new Chaise();
