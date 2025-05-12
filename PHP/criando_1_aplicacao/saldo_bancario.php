<?php

//echo "Digite um número: \n";
//$numero = (int) fgets(STDIN);
//echo "O número é: $numero\n";

$saldo = 1_000;
$titularConta = 'Adrielly Dantas';

echo "*********************\n";
echo "Titular: $titularConta\n";
echo "Saldo Atual: RS $saldo\n";
echo "*********************\n";

do {
    
    echo "1. Consultar Saldo Atual\n";
    echo "2. Sacar valor\n";
    echo "3. Depositar valor\n";
    echo "4. Sair\n";

    $opcao = (int) fgets(STDIN);

    switch ($opcao) {
        case 1:
                echo "*************\n";
                echo "Titular: $titularConta\n";
                echo "Saldo atual: R$ $saldo\n";
                echo "*************\n";
                break;

        case 2:
                echo "Qual valor deseja sacar?\n";
                $valorASacar = (float) fgets(STDIN);
                if ($valorASacar > $saldo) {
                        echo "Saldo insuficiente\n";
                } else {
                        $saldo -= $valorASacar;
                }
                break;

        case 3:
                echo "Quanto deseja depositar?\n";
            $valorADepositar = (float) fgets(STDIN);
            $saldo += $valorADepositar;
                break;
                        
        case 4:
            echo "Adeus\n";
            break;
                        
        default:
            echo "Opção inválida\n";
                break;
        }
} while ($opcao != 4);

//function exibirMenu($saldo, $titular) {
//    echo "******************\n";
//    echo "Titular: $titular\n";
//    echo "Saldo atual: R$" . number_format($saldo, 2) . "\n";
//    echo "******************\n";
//    echo "Opções:\n";
//    echo "1. Consultar saldo atual\n";
//    echo "2. Sacar valor\n";
//    echo "3. Depositar valor\n";
//   echo "4. Sair\n";
//  echo "******************\n";

//do {
//    exibirMenu($saldo, $titular); // Exibe o menu
//    echo "Escolha uma opção: ";
//   $opcao = (int) fgets(STDIN); // Lê a opção do usuário


