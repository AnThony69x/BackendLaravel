<?php

namespace App\Aplicacion\Usuario\Services;

use App\Dominio\Usuario;
use App\Infraestructura\Usuario\Repositories\EloquentUsuarioRepository;

class RegistrarUsuarioService
{
    public function __construct(private EloquentUsuarioRepository $usuarioRepository) {}

    public function ejecutar(array $datos): Usuario
    {
        $usuario = new Usuario(
            id: 0,
            nombre: $datos['nombre'],
            correo: $datos['correo'],
            password: password_hash($datos['password'], PASSWORD_DEFAULT),
            rol: $datos['rol'] ?? 'turista',
            telefono: $datos['telefono'] ?? null,
            avatar_url: $datos['avatar_url'] ?? null,
            activo: true
        );
        
        return $this->usuarioRepository->crear($usuario);
    }
}