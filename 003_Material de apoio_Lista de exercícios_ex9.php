<?php
$capital = 1000.00;
$taxaJuros = 0.10;
$tempo = 12;
$juros = $capital * $taxaJuros * $tempo;

echo "O valor do juro gerado é R$ " . number_format($juros, 2, ',', '.');
?>