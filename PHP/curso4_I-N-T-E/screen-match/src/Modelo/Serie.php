<?php

namespace ScreenMatch\Modelo;

class Serie extends Titulo {

    public function __construct(
        string $nome, 
        int $anoLancamento,
        Genero $genero,
        public readonly int $temporadas,
        public readonly int $episodiosPorTemporada,
        public readonly int $minutosPorEpisiodio
        ) {
            parent::__construct($nome, $anoLancamento, $genero);
        }

        #[\Override] // Anotação que indica que este método sobrescreve um método da classe pai
        // O método duracaoEmMinutos calcula a duração total da série em minutos
        public function duracaoEmMinutos(): int {
            return $this->temporadas * $this->episodiosPorTemporada * $this->minutosPorEpisiodio;
        }
}

