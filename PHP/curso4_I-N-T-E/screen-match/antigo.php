<?php

require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/funcoes.php";

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

$filme = criaFilme(
    nome:"Thor: Ragnarok", 
    anoLancamento: 2021, 
    nota: 7.8, 
    genero: "super-herói"
);

echo $filme -> anoLancamento;

var_dump($notas);
sort($notas);
var_dump($notas);
$menorNota = min($notas);
echo "A menor nota é: $menorNota\n";

var_dump($filme -> nome);
$posicaoDoisPontos = strpos($filme -> nome, ':');
var_dump($posicaoDoisPontos);

var_dump(substr($filme -> nome, 0, $posicaoDoisPontos));

var_dump(json_decode('{"nome":"Thor: Ragnarok","ano":2021,"nota":7.8,"0":"super-her\u00f3i"}', true));
$filmeComoStringJson = json_encode($filme);
file_put_contents(__DIR__ . '/filme.json', $filmeComoStringJson);