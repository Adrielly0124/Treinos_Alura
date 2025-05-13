<?php

echo "DESAFIO 1\n";

function operacaoMatematicaint (int $numero1, int $numero2, string $operacao): float {
    return match($operacao) {
        'soma' => $numero1 + $numero2,
        'subtração' => $numero1 - $numero2,
        'divisão' => $numero1 / $numero2,
        'multiplicação' => $numero1 * $numero2,
    };
}

echo "DESAFIO 2\n";
function calcularImc(float $alturaEmMetros, float $pesoEmQuilos): float {
    return $pesoEmQuilos / $alturaEmMetros ** 2;
}


echo "DESAFIO 3\n";
function celsiusToFahrenheit(float $celsius): float {
    return ($celsius * 9 / 5) + 32;
}