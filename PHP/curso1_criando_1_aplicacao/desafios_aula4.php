<?php

echo "DESAFIO 1\n";

$array = [1, 2, 2, 3, 4, 4, 5];
$semDuplicadas = array_unique($array); //remove elementos duplicados

echo "DESAFIO 2\n";

$notas = [10, 5.5, 3.8, 7.5, 6, 6.1, 5.9];

foreach ($notas as $nota) {
    $resultado = $nota > 6 ? "aprovado" : "reprovado";

    echo "Esse(a) aluno(a) foi $resultado com a nota $nota \n";
}

echo "DESAFIO 3\n";

$conta = [
    'titulo' => 'Adrielly Dantas',
    'saldo' => 1000,
];

echo $conta['titulo'] . ' possui ' . $conta['saldo'] . ' reais de saldo.';

echo "\nDESAFIO 4\n";

$familiares = ['Gabrielly', 'Andreia', 'Gilberto', 'Felipe'];
$familiares[] = 'Andreia';

