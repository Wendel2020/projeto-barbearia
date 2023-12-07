<?php

namespace ProjetoBarbearia\Models\DAO;

use ProjetoBarbearia\Core\DAO;

use ProjetoBarbearia\Models\Entities\Usuario;

class UsuariosDAO extends DAO{
   
  protected static string $tabela = "usuarios";
  protected static string $classe = Usuario::class;


}
