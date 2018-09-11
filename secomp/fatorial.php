<?php

  function fat($n){
    $ret = $n;
    for($i = $n - 1; $i >= 1; $i--){
      $ret *= $i;
    }

    return $ret;
  }


  $n = readline("Insira um numero para saber seu fatorial! ");
  echo fat($n);
  echo "\n";
?>
