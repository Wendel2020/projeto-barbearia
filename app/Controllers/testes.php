<?php
namespace ProjetoBarbearia\Controllers;

use ProjetoBarbearia\Core\Controller;
use ProjetoBarbearia\Models\DAO\UsuariosDAO;
use ProjetoBarbearia\Models\Entities\Usuario;

class TesteController extends Controller{
public function teste(){
    $usuario = new Usuario;
    $usuario->nome = "Wendel";
    $usuario->email = "Wendel";
    $usuario->login = "Wendel";
    $usuario->senha = "1234";
    $usuario->tipo = 1;
   UsuariosDAO::inserir($usuario);
  }

  public function teste2(){
   $usuarios = UsuariosDAO::getAll();
    foreach ($usuarios as $usuario ) {
      echo $usuario->nome;
      echo "<hr>";
    }
  }

  public function teste3(){
    $usuario=UsuariosDAO::getById(9);
    var_dump($usuario);
  }
  
  public function teste4(){
    $usuario = UsuariosDAO::getById(7);
    $usuario->nome = "Joao";
    $usuario->email = "Joao";
    $usuario->login = "Joao";
    UsuariosDAO::editar($usuario);
    
  }
  public function teste5(){
 
    $usuario =UsuariosDAO::getById(9);
    if ($usuario) {
      UsuariosDAO::excluir($usuario);
      echo "Usuario excluido com sucesso";
    }else{
      echo "Usuario não existe";
    } 
  }
  public function teste6(){
    $usuario = new Usuario(
      ['nome' => "Wendel",
      'email' => "Wendel",
      'login' => "Wendel",
      'senha' => "1234",
      'tipo' => 1]
    );
    var_dump($usuario->getProps());

  }
}
