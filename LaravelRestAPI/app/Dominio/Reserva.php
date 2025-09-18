<?php

namespace App\Dominio;

class Reserva
{
    public function __construct(
        public int $id,
        public int $usuario_id,
        public int $tour_id,
        public string $estado,
        public string $fecha_reserva,
        public int $cantidad_personas,
        public float $precio_total,
        public ?string $notas = null
    ) {}
}
