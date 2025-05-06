<?php

echo "DESAFIO 1\n";
echo "Drika\n";

echo "\n";

echo "DESAFIO 2\n";
$nota1 = 7;
$nota2 = 8;
$nota3 = 6;
$nota4 = 8;
$media = ($nota1 + $nota2 + $nota3 + $nota4) / 4;
echo "A média é: " . $media . "\n";

echo "\n";

echo "DESAFIO 3\n";
$metros = 5;
$centimetros = $metros * 100;
echo "A média é: " . $media . "\n";

echo "\n";

echo "DESAFIO 4\n";
$ano = 2024;
if (($ano % 4 == 0 && $ano % 100 != 0) || $ano % 400 == 0) {
    echo "$ano é bissexto.\n";
} else {
    echo "$ano não é bissexto.\n";
}

echo "\n";

echo "DESAFIO 5\n";
$temperaturaEmCelsius = 30.4;
$temperaturaEmFahrenheit = $temperaturaEmCelsius * 1.8 +32;
$mensagem = "A temperatura de $temperaturaEmCelsius Celsius é equivalente a $temperaturaEmFahrenheit Fahrenheit";

echo $mensagem;
