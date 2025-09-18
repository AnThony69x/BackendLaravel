<?php

namespace App\Dominio;

class Usuario
{
    public function __construct(
        public int $id,
        public string $nombre,
        public string $password,
        public string $rol,
        public ?string $telefono = null,
        public ?string $avatar_url = null,
        public bool $activo = true
    ) {}
}