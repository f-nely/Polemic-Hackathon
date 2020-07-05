<?php

echo "Informe a temperatura em Fahrenheit: " . PHP_EOL;
$f = intval( rtrim(fgets(STDIN)));

$c = (5 * ($f-32) / 9);
echo "A temperatura em Celsius é: " . $c . PHP_EOL . PHP_EOL;

echo "Informe a temperatura em Celsius: " . PHP_EOL;
$c = intval( rtrim(fgets(STDIN)));

$f = ($c * 1.8) + 32;
echo "A temperatura em Fahrenheit é: " . $f . PHP_EOL;
