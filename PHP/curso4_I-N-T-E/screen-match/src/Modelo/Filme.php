<?php

namespace ScreenMatch\Modelo;

class Filme extends Titulo {

    public function __construct(
        string $nome, 
        int $anoLancamento,
        Genero $genero,
        public readonly int $duracaoEmMinutos,
        ) {
            parent ::__construct($nome, $anoLancamento, $genero); //estamos inicializando a classe pai Titulo
        }
        
        #[\Override]
        public function duracaoEmMinutos(): int {
            return $this->duracaoEmMinutos;
        }
    }
