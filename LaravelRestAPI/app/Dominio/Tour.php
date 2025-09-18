<?php

namespace App\Dominio;

class Tour
{
    public function __construct(
        public int $id,
        public string $titulo,
        public string $descripcion,
        public float $precio,
        public int $duracion,
        public int $max_personas,
        public int $id_guia,
        public ?string $ubicacion = null,
        public ?string $fecha_inicio = null,
        public ?string $fecha_fin = null,
        public ?string $imagen_url = null,
        public bool $activo = true
    ) {}
}
