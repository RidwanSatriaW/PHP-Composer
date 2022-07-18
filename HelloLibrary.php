<?php

require_once __DIR__ . '/vendor/autoload.php';

$customer = new \ProgrammerZamanNow\Belajar\Customer("Ridwan");

echo $customer->sayHello() . PHP_EOL;
echo $customer->sayHello("Budi") . PHP_EOL;
