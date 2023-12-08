<?php

namespace ProjetoBarbearia\Models\Entities;

use ProjetoBarbearia\Core\Entity;

class Cabelo extends Entity{
    protected ?int $id;
    protected ?string $nome;
    protected ?float $preco;
    protected ?string $foto;

}