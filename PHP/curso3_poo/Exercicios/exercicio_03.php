<?php

/*Desafio 1*/
enum TipoConta {
    case Corrente;
    case Poupanca;
    case Universitaria;
    case Investimento;

    public function possuiTaxa(): bool{
        return match($this){
            TipoConta::Corrente, TipoConta::Investimento => true,
            TipoConta::Poupanca, TipoConta::Universitaria => false,
        };
    }
}

/*Desafio 2*/
class Conta{
    private int $saldoEmCentavos;

    public function __construct(
        public readonly string $nomeTitular,
        public readonly string $numeroConta,
    ){
        $this->saldoEmCentavos = 0; // Inicializa o saldo em centavos
    }

    public function depositar (int $valorADepositar): void {
        if ($valorADepositar > 0) {
            $this->saldoEmCentavos += $valorADepositar;
        }
    }

    public function sacar(int $valorASacar): void {
        if ($valorASacar > 0 && $valorASacar < $this->saldoEmCentavos) {
            $this->saldoEmCentavos -= $valorASacar;
        }
    }
}