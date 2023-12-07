<?php

namespace ProjetoBarbearia\Models\DAO;

use ProjetoBarbearia\Core\DAO;
use ProjetoBarbearia\Core\Database;
use ProjetoBarbearia\Models\Entities\Usuario;

class UsuariosDAO extends DAO{
   
  protected static string $tabela = "usuarios";
  protected static string $classe = Usuario::class;

    public static function inserir($usuario){
        $db = new Database();
        $tabela = static::$tabela;
        $sql = "INSERT INTO {$tabela}
                  (nome,login,email,senha,tipo,turmas_id)
                  VALUES(?,?,?,?,?,?)";
                  
        $dados = [
          $usuario->nome,
          $usuario->login,
          $usuario->email,
          $usuario->senha,
          $usuario->tipo,

        ];
        return $db->execute($sql, $dados);
      }
    

   
      public static function editar ($usuario){
        $db = new Database;
        $tabela = static::$tabela;
        $sql = "UPDATE {$tabela} SET 
                    nome = ?, email = ?, login = ?, senha = ?, tipo =? WHERE id =?";
        $dados = [
          $usuario->nome,
          $usuario->email,
          $usuario->login,
          $usuario->senha,
          $usuario->tipo,
          $usuario->id
        ];
        return $db->execute($sql, $dados);
      }

    }
