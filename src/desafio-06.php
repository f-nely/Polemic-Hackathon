<?php

function geraSenha($x, $y){
  $gera = rand($x, $y);
  return $gera;
}
echo geraSenha(100000, 400000);