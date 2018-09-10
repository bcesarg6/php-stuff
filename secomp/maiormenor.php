<?php

  $n=readline();
  $menor = PHP_INT_MAX;
  $maior = PHP_INT_MIN;


  for($i = 0; $i < $n; $i++){
    $num = readline();
    $menor = ($num < $menor) ? $num : $menor;
    $maior = ($num > $maior) ? $num : $maior;
  }

echo "Maior = ".$maior."\n";
echo "Menor = ".$menor."\n";
?>
