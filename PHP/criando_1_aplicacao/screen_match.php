<?php

echo "Bem vindo(a) ao Screen Match!\n"; //quebra de linha

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022; 

$quantidadeDeNotas = $argc - 2;
$somaDeNotas = 0;

//Uma das formas de se conseguir somar as notas do filme -  solução mais interessante nesse caso
for ($contador = 1; $contador < $argc; $contador += 1) {
   $somaDeNotas += $argv[$contador];
}

//2º forma de se conseguir somar as notas do filme
//$contador = 1;
//while ($argv[$contador] != 0) {
//  $somaDeNotas += $argv[$contador++];
//}

//3º forma de se conseguir somar as notas do filme
//do {

//} while();

$notaFilme = $somaDeNotas / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = $planoPrime || $anoLancamento < 2020;//boolean

echo "Nome do Filme: " . $nomeFilme . "\n"; //concatenação

echo "Nota do Filme: $notaFilme\n"; // interpolação

echo "Ano de Lançamento: $anoLancamento\n";

if ($anoLancamento > 2022){
    echo "Esse filme é um lançamento!!!\n";
} elseif ($anoLancamento > 2020 && $anoLancamento <= 2022){
    echo "Esse filme ainda é novo!\n";
} else {
    echo "Esse filme não é um lançamento!\n";
}

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarok" => "Super-herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};

echo "O gênero do filme é: $genero\n";

echo $argc;
