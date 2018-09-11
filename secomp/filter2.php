<?php

  function div3($var){
    return($var%3==0);
  }

  $vet = [0,1,2,3,4,5,6,7,8,9,10,11,12];

  echo "Valores divisiveis por 3: \n";
  print_r(array_filter($vet,"div3"));
  echo "\n";
?>
