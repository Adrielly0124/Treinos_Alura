<?php

$conteudoArquivoJson = file_get_contents('filme.json');
$filme = json_decode($conteudoArquivoJson, true);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filme inserido</title>
</head>
<body>
    <h1><?= $filme['nome'];?></h1>
    <dl> 
        <dt>Ano de Lançamento</dt>
        <dd><?= $filme['anoLancamento'];?></dd>

        <dt>Nota</dt>
        <dd><?= $filme['nota'];?></dd>

        <dt>Gênero</dt>
        <dd><?= $filme['genero'];?></dd>
    </dl>
</body>
</html>