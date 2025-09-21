<?php

namespace App\Aplicacion\Reserva\Services;

use App\Dominio\Reserva;
use App\Infraestructura\Reserva\Repositories\ReservaRepositorioInterface;

class ReservarTourService
{
    public function __construct(private ReservaRepositorioInterface $reservaRepositorio) {}

    public function ejecutar(array $datos): Reserva
    {
        $reserva = new Reserva(
            id: 0,
            usuario_id: $datos['usuario_id'],
            tour_id: $datos['tour_id'],
            estado: 'pendiente',
            fecha_reserva: new \DateTime(),
            cantidad_personas: $datos['cantidad_personas'],
            precio_total: $datos['precio_total'],
            notas: $datos['notas'] ?? null
        );
        
        return $this->reservaRepositorio->guardar($reserva);
    }
}