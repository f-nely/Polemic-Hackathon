<?php

$cpf = 86288366767;

// Validando 1º digito
$x = (8*10) + (6*9) + (2*8) + (8*7) + (8*6) + (3*5) + (6*4) + (6*3) + (7*2);
$x1 = ($x * 100) % 11;

if($x1 === 6){
  echo "Validado 1º digito do CPF\n";
}
// Validando 2º digito
$y = ((8*11) + (6*10) + (2*9) + (8*8) + (8*7) + (3*6) + (6*5) + (6*4) + (7*3) + (5*2)) * 10;
$y1 = $y % 11;

if($y1 === 7) {
  echo "CPF validado";
}


