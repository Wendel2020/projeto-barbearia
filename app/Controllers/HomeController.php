<?php

namespace ProjetoBarbearia\Controllers;

use ProjetoBarbearia\Core\Controller;
use ProjetoBarbearia\Models\DAO\UsuariosDAO;
use ProjetoBarbearia\Models\Entities\Usuario;

class HomeController extends Controller{

    public function index(){
      $dados = ['titulo' => 'Atividades IFBA'];
      $this->view('inicial', $dados);
    }

    public function teste(){
      $usuario = new Usuario;
      $usuario->nome = "Wendel";
      $usuario->email = "Wendel";
      $usuario->login = "Wendel";
      $usuario->senha = "1234";
      $usuario->tipo = 1;
      $DAO = new UsuariosDAO();
      $DAO->inserir($usuario);
    }

    public function teste2(){
      $DAO = new UsuariosDAO;
      $usuarios = $DAO->getAll();
      foreach ($usuarios as $usuario ) {
        echo $usuario->nome;
        echo "<hr>";
      }
    }

    public function teste3(){
      $DAO = new UsuariosDAO;
      $usuario =$DAO->getById(9);
      var_dump($usuario);
    }
    
    public function teste4(){
      $DAO = new UsuariosDAO;
      $usuario =$DAO->getById(7);
      $usuario->nome = "Joao";
      $usuario->email = "Joao";
      $usuario->login = "Joao";
      $DAO->editar($usuario);
      
    }
}