<?php

//echo "O que você escolhe - Pedra, Papel ou Tesoura?: " . PHP_EOL;
//$jog1 = intval( rtrim(fgets(STDIN)));
$jog1 = readline("O que você escolhe - Pedra, Papel ou Tesoura?:");
$jog2 = readline("O que você escolhe - Pedra, Papel ou Tesoura?:");
//echo "O que você escolhe - Pedra, Papel ou Tesoura?: " . PHP_EOL;
//$jog2 = intval( rtrim(fgets(STDIN)));

if ($jog1 ==="pedra" && $jog2 === "tesoura") {
  echo " Pedra ganha da Tesoura:  ";
} elseif ($jog1 === "tesoura" && $jog2 === "papel"){
  echo "Tesoura ganha do Papel (o corta)";
} elseif ($jog1 === "papel" && $jog2 === "pedra") {
  echo "Papel ganha da Pedra (a embrulha)";
} elseif ($jog2 === "pedra" && $jog1 === "tesoura") {
  echo " Pedra ganha da Tesoura:  ";
} elseif ($jog2 === "tesoura" && $jog1 === "papel"){
  echo "Tesoura ganha do Papel (o corta)";
} elseif ($jog2 === "papel" && $jog1 === "pedra") {
  echo "Papel ganha da Pedra (a embrulha)";
} elseif ($jog1 === $jog2 || $jog2 === $jog1) {
  echo "Empate";
} else {
  echo "Indefinido: ";
}



