<?php

include_once './SimulateurCredit.php';
include_once './Mathematic.php';

echo Mathematic::addition('12', '12');
echo Mathematic::soustraction(12, 89);
echo Mathematic::multiplication(12, 89);
$res = Mathematic::division(12, 120);

if ($res === false) {
}
