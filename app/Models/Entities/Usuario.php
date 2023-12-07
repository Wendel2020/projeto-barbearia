<?php

namespace ProjetoBarbearia\Models\Entities;

use ProjetoBarbearia\Core\Entity;

class Usuario extends Entity{
    protected ?int $id;
    protected ?string $nome;
    protected ?string $email;
    protected ?string $login;
    protected ?string $senha;
    protected ?int $tipo;



    public function setSenha($valor){
        $this->senha = password_hash($valor, PASSWORD_DEFAULT);
    }
}