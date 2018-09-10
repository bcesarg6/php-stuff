<?php

  function par($var){
    return($var%2==0);
  }

  function impar($var){
    return($var%2!=0);
  }

  $vet = array();
  $n = readline("Insira o numero de elementos: ");

  for($i = 0; $i < $n; $i++){
    array_push($vet,readline());
  }

  echo "Valores pares: \n";
  print_r(array_filter($vet,"par"));
  echo "\n";

  echo "Valores impares: \n";
  print_r(array_filter($vet,"impar"));
  echo "\n";
?>
