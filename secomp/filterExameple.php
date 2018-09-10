<?php

  $vet = [0,1,2,3,4,5,6,7,8,9,10];

  print_r($vet);
  echo "\n";
  print_r(array_reduce($vet,
                        function($acc, $valor){
                          return $acc + $valor;
                        },0)
                      );

?>
