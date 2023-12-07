<?php

namespace ProjetoBarbearia\Models\Entities;

class Usuario{
    public ?int $id;
    public ?string $nome;
    public ?string $email;
    public ?string $login;
    public ?string $senha;
    public ?int $tipo;
}