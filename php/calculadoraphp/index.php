<?php

require_once(__DIR__ . '/vendor/autoload.php');

use App\Calculadora;

$calculadora = new Calculadora();
$calculadora->somar(2,2);
echo $calculadora->getResultado() . PHP_EOL;