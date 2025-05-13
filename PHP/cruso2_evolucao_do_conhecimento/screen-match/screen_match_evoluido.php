<?php

require __DIR__ . "/funcoes.php";

echo "Bem vindo(a) ao Screen Match!\n"; //quebra de linha

$nomeFilme = "Top Gun - Maverick";

$anoLancamento = 2022; 

$quantidadeDeNotas = $argc - 2;
$notas = [];

for ($contador = 1; $contador < $argc; $contador += 1) {
   $notas[] = (float) $argv[$contador];
}

$notaFilme =array_sum($notas) / $quantidadeDeNotas;
$planoPrime = true;

$incluidoNoPlano = incluidoPlano($planoPrime, $anoLancamento);

echo "Nome do Filme: " . $nomeFilme . "\n"; //concatenação

echo "Nota do Filme: $notaFilme\n"; // interpolação

echo "Ano de Lançamento: $anoLancamento\n";

exibeMensagemLancamento($anoLancamento);

$genero = match ($nomeFilme) {
    "Top Gun - Maverick" => "Ação",
    "Thor: Ragnarok" => "Super-herói",
    "Se beber não case" => "Comédia",
    default => "Gênero desconhecido"
};

echo "O gênero do filme é: $genero\n";

$filme = [
    "nome" => "Thor: Ragnarok",
    "ano" => 2021,
    "nota" => 7.8,
    "super-herói",
];

echo $filme ['ano'];

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
echo "A menor nota é: $menorNota\n";

var_dump($filme['nome']);
$posicaoDoisPontos = strpos($filme['nome'], ':');
var_dump($posicaoDoisPontos);

var_dump(substr($filme['nome'], 0, $posicaoDoisPontos));
