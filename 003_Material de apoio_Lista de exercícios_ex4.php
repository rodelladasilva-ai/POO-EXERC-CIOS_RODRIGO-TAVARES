<?php
$valorProduto = 200.00;
$percentualDesconto = 20;
$desconto = $valorProduto * ($percentualDesconto / 100);
$valorFinal = $valorProduto - $desconto;

echo "O produto custava R$ {$valorProduto} e agora custa R$ {$valorFinal}";
?>