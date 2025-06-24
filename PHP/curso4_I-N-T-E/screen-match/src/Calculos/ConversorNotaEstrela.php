<?php

class ConversorNotaEstrela{
    public function converte(Avaliavel $avaliável): float{
        $nota = $avaliável->media();

        //realiza a conversão de nota 
        return round($nota) / 2;
    }
}