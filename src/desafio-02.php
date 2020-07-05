<?php

echo "Digite o número em decimal: " . PHP_EOL;
$number = intval( rtrim(fgets(STDIN)));

switch ($number) {
  case 1:
    echo "I";
    break;
  case 2:
    echo "II";
    break;
  case 3:
    echo "III";
    break;
  case 4:
    echo "IV";
    break;
  case 5:
    echo "V";
    break;
  case 6:
    echo "VI";
      break;
  case 7:
    echo "VII";
    break;
  case 8:
    echo "VIII";
    break;
  case 9:
    echo "IX";
    break;
  case 10:
    echo "X";
    break;
  case 11:
    echo "XI";
   break;
  case 12:
    echo "XII";
    break;
  case 13:
    echo "XIII";
    break;
  case 14:
    echo "XIV";
    break;
  case 15:
    echo "XV";
    break;
  case 16:
    echo "XVI";
    break;
  case 17:
    echo "XVII";
    break;
  case 18:
    echo "XVIII";
    break;
  case 19:
    echo "XIX";
    break;
  case 20:
    echo "XX";
    break;

  default:
    echo "Conversor vai de 1 a 20: ";
    break;
}

/*
20 = XX
21 = XXI
22 = XXII
23 = XXIII
24 = XXIV
25 = XXV
26 = XXVI
27 = XXVII
28 = XXVIII
29 = XXIX
30 = XXX
*/