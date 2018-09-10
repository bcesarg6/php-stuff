<?php

$valor=readline();
$idade=readline();
$desc;

if($idade <= 12):
  $idade = 0;
elseif($idade <= 17):
  $idade = 1;
elseif($idade <= 28):
  $idade = 2;
else:
  $idade = 3;
endif;


switch ($idade) {
    case 0:
        $desc = 10;
        break;
    case 1:
        $desc = 20;
        break;
    case 2:
        $desc = 25;
        break;
    case 3:
        $desc = 35;
        break;
    default:
        $desc = 40;
    }

$valor_desc = ($valor * $desc) / 100;
$valor -= $valor_desc;

$valor_desc = number_format($valor_desc,2);
$valor = number_format($valor,2);

echo $desc."% de desconto.\n";
echo "Valor: ".'R$ '.$valor."\n";
echo "Você economizou ".'R$ '.$valor_desc."\n";

?>
