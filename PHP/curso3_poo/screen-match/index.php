<?php

require __DIR__ . "/src/Modelo/Filme.php";

echo "Bem-vindo(a) ao ScreenMatch\n";

$filme = new Filme();
$filme-> nome = 'Thor - Ragnarok';
$filme->anolancamento = 2021;
$filme->genero = 'super-heroi';
$filme->media = 8.8;

var_dump($filme);

