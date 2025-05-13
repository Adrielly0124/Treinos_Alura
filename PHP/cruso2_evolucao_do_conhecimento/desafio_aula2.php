<?php

echo "DESAFIO 1\n";
$notas = [8.5, 9.2, 7.8, 9.0, 8.8];
rsort($notas);

echo "As três maiores notas são: $notas[0], $notas[1] e $notas[2]\n";

echo "DESAFIO 2\n";
$string = "Adrielly Dantas de Oliveira, 2007, Estudante";
var_dump(explode(',', $string));

echo "DESAFIO 3\n";

function ordenarStrings(array $array): array {
    sort($array);
    return $array;
}

$array = array("banana", "abacaxi", "laranja", "uva");
$arrayOrdenado = ordenarStrings($array);
echo "Array ordenado: ";
print_r($arrayOrdenado);