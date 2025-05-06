<?php

echo "Bem vindo(a) ao Screen Match!\n"; //quebra de linha

$nomeFilme = "Top Gun - Maverick";
$anoLancamento = $argv[1] ?? 2022; 
$somaDeNotas = 9 + 6 + 8 + 7.5 + 5;
$notaFilme = $somaDeNotas / 5;
$planoPrime = true;
$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;//boolean

echo "Nome do Filme: " . $nomeFilme . "\n"; //concatenação

echo "Nota do Filme: $notaFilme\n"; // interpolação

echo "Ano de Lançamento: $anoLancamento\n";

