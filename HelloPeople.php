<?php

require_once __DIR__ . '/vendor/autoload.php';

use Ridwan\BelajarPhpComposer\Data\People;

$people = new People("Ridwan");

echo $people->sayHello("Kasino") . PHP_EOL;
