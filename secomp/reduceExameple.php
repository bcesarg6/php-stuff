<?php

  $vet = [1,2,3,4];

  print_r($vet);
  echo "\n";
  $sum = array_reduce($vet, function($acc, $valor){
                              return $acc + $valor;
                            }
                      );

  echo "Soma = ".$sum."\n";

?>
