<?php

require __DIR__ . "/src/Modelo/Genero.php";
require __DIR__ . "/src/Modelo/Titulo.php";
require __DIR__ . "/src/Modelo/Serie.php";
require __DIR__ . "/src/Modelo/Filme.php";
require __DIR__ . "/src/Calculos/CalculadoraDeMaratona.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme(
    nome: 'Thor - Ragnarok',
    anoLancamento: 2021,
    genero: Genero::SuperHeroi,
    duracaoEmMinutos: 180,
);

$filme->avalia(10);
$filme->avalia(10);
$filme->avalia(5);
$filme->avalia(5);

var_dump($filme);

echo $filme->media() . "\n";

echo $filme->anoLancamento . "\n";

$serie = new Serie(
    nome: 'Game of Thrones',
    anoLancamento: 2011,
    genero: Genero::Fantasia,
    temporadas: 8,
    episodiosPorTemporada: 10,
    minutosPorEpisiodio: 60
);

echo $serie->anoLancamento . "\n";
$serie->avalia(10);
echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos.\n";