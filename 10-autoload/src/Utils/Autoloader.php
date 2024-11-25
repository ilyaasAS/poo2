<?php

namespace App\Utils;

class Autoloader
{

    public static function autoload()
    {
        spl_autoload_register(function ($className) {
            $className = str_replace('App', 'src', $className);
            include "$className.php";
        });
    }
}
