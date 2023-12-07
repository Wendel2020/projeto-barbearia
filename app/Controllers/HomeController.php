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
    

}