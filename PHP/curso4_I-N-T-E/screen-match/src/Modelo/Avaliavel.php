<?php

namespace ScreenMatch\Modelo;

interface Avaliavel {
    public function avalia(float $nota);
    public function media(): float;
}