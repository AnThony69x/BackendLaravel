<?php

namespace App\Aplicacion\Tour\Services;
use App\Infraestructura\Tour\Repositories\TourRepositorioInterface;

class CrearTourService
{
    public function __construct(private TourRepositorioInterface $tourRepository) {}

    public function ejecutar(array $datos): Tour
    {
        $tour = new Tour(
            id: 0,
            titulo: $datos['titulo'],
            descripcion: $datos['descripcion'],
            precio: $datos['precio'],
            duracion: $datos['duracion'],
            max_personas: $datos['max_personas'],
            id_guia: $datos['id_guia'],
            ubicacion: $datos['ubicacion'] ?? null,
            fecha_inicio: $datos['fecha_inicio'] ?? null,
            fecha_fin: $datos['fecha_fin'] ?? null,
            imagen_url: $datos['imagen_url'] ?? null,
            activo: true,
        );
        
        return $this->tourRepository->guardar($tour);
    }
}