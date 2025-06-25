<?php

require 'autoload.php';
spl_autoload_register(function (string $className) {
    $caminho = str_replace('ScreenMatch', '/src', $className) . '.php';
    $caminho = str_replace('\\', DIRECTORY_SEPARATOR, $caminho);
    require_once __DIR__ . DERECTORY_SEPARATOR . $caminho;
    var_dump($caminho);
});

use ScreenMatch\Modelo\{
    Genero,
    Filme,
    Serie,
    Episodio,
    Titulo
};

use ScreenMatch\Calculos\{
    CalculadoraDeMaratona,
    ConversorNotaEstrela
};

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

$episodio1 = new Episodio(
    serie: $serie,
    nome: 'Winter is Coming',
    numero: 1
);

echo $serie->anoLancamento . "\n";
$serie->avalia(10);
echo $serie->media() . "\n";

$calculadora = new CalculadoraDeMaratona();
$calculadora->inclui($filme);
$calculadora->inclui($serie);
$duracao = $calculadora->duracao();

echo "Para essa maratona, você precisa de $duracao minutos.\n";

$conversor = new ConversorNotaEstrela();
echo $conversor->converte($serie) . "\n";
echo $conversor->converte($filme) . "\n";