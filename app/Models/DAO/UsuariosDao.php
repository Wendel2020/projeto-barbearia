<?php

namespace ProjetoBarbearia\Models\DAO;

use ProjetoBarbearia\Core\Database;
use ProjetoBarbearia\Models\Entities\Usuario;

class UsuariosDAO{
   
    public function inserir(Usuario $usuario){
        $db = new Database();
        $sql = "INSERT INTO usuarios
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
      public function getAll(){
        $db = new Database;
        $sql = "SELECT * FROM usuarios";
        $db->execute($sql);
        return $db->getAll(Usuario::class);
      }

      public function getById($id){
        $db = new Database;
        $sql = "SELECT * FROM usuarios WHERE id =?";
        $db->execute($sql, [$id]);
        return $db->get(Usuario::class);
      }

      public function editar (Usuario $usuario){
        $db = new Database;
        $sql = "UPDATE usuarios SET 
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
