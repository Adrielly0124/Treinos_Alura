<?php

use ScreenMatch\Calculos\ConversorNotaEstrela;
use ScreenMatch\Modelo\Episodio;
use ScreenMatch\Modelo\Genero;
use ScreenMatch\Modelo\Serie;

require_once 'autoload.php';

$serie = new Serie('nome da série', 2023, Genero::Comedia, 2, 10, 40);
$episodio = new Episodio($serie, 'nome do episódio', 1);

try {
    $episodio->avalia(45);
    $episodio->avalia(-35);

    $conversor = new ConversorNotaEstrela();
    echo $conversor->converte($episodio) . "\n";
} catch (NotaInvalidaException $e) {
    echo "Um problema aconteceu, erro ao avaliar a série: " . $e->getMessage() . "\n";
}


