<?php

echo "DESAFIO 1\n";

$arquivo = fopen('teste.txt', 'r');
$primeiraLinha = fgets($arquivo);
fclose($arquivo);

echo "DESAFIO 2\n";
$nomeArquivo = 'text.txt';
$novaFase = "\nPHP é incrível!";

//Abre o arquivo para escrita no final
$arquivo = fopen($nomeArquivo, 'a');
//escreve no arquivo
fwrite($arquivo, $novaFase);
//Fecha o arquivo
fclose($arquivo);

echo "DESAFIO 4\n";

$stringJson = '{"nome" : "Adrielly","anoNascimento":2007, "profissao": "Estudante"}';
var_dump(json_decode($stringJson, true));

