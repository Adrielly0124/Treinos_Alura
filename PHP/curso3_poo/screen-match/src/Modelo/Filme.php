<?php

class Filme {
    private string $nome = 'Nome Padrão';
    private int $anoLancamento = 2024;
    private string $genero = 'Ação';
    private float $media;
    private array $notas = [];

    public function avalia(float $nota):void{
        $this->notas[] = $nota;
    }

    public function media(): float{
        $somaNotas = array_sum($this->notas);
        $quantidadeNotas = count($this->notas);
        return $somaNotas / $quantidadeNotas;
    }

    public function anoLancamento(): int {
        return $this->anoLancamento; //método público para acessar uma propriedade privada 
    }

    public function defineAnoLancamento(int $anoLancamento) {
        $this->anoLancamento = $anoLancamento;
    }

}

