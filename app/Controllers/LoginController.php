<?php

namespace ProjetoBarbearia\Controllers;

use ProjetoBarbearia\Core\Controller;
use ProjetoBarbearia\Models\DAO\UsuariosDAO;
use ProjetoBarbearia\Models\Entities\Usuario;

class LoginController extends Controller{
    public function login(){
    
        $this->view('login',['pagina'=> 'Pagina de Login']);
    }
    public function cadastro(){
        $this->view('conta');
    }

    public function cadastrarconta(){
      
      $usuario = new Usuario($this->post());
       $usuario->tipo = 1;

       if(UsuariosDAO::inserir($usuario)){
        flash("Usuário {$usuario->nome} foi criado com sucesso!");
        redireciona('login');
       }
        
    }
}