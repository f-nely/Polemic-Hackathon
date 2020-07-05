<?php

$a = 1;
$b = 12;
$c = -13;

$delta = ($b*$b)-((4*$a)*$c);

if($delta > 0){
  $x1 = (-$b + sqrt($delta))/ (2 * $a);
  $x2 = (-$b - sqrt($delta))/ (2 * $a);
}


echo $x1 . "<br>";
echo $x2;




